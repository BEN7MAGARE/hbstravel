<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Support\Facades\Http;

class TboService
{
    private static $headers = [];

    public function __construct() {
        self::$headers = $this->getClientHeader();
    }

    private function getClientHeader() {
        $username = config('services.hbo.username');
        $password = config('services.hbo.password');
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode('' . $username . ':' . $password . ''),
        ];
    }

    static function getHotelsCodes() {
        return Http::withHeaders(self::$headers)
            ->get(config('services.hbo.base_url') . '/hotelcodelist')
            ->json();
    }

    static function getCountries() {
        return Http::withHeaders(self::$headers)
            ->get(config('services.hbo.base_url').'/CountryList')
            ->json();
    }

    static function getHotelDetailsRequests() {
        return function ($hotelCodes) {
            foreach ($hotelCodes as $hotelCode) {
                yield new \GuzzleHttp\Psr7\Request(
                    'POST',
                    config('services.hbo.base_url').'/HotelDetails',
                    self::$headers,
                    json_encode([
                        "Hotelcodes" => $hotelCode,
                        "Language" => "EN"
                    ])
                );
            }
        };
    }

    static function getHotelDetails($hotelCode) {
        return Http::withHeaders(self::$headers)
            ->post(
                config('services.hbo.base_url').'/HotelDetails',
                [
                    "Hotelcodes" => $hotelCode,
                    "Language" => "EN"
                ]
            )->json();
    }

    static function search($hotelsCodes, $checkIn, $checkOut, $rooms, $country=null) {
        // return self::$headers;

        return Http::withHeaders(self::$headers)
            ->post(
                config('services.hbo.base_url').'/Search',
                [
                    "CheckIn" => $checkIn,
                    "CheckOut" => $checkOut,
                    "HotelCodes" => join(',', $hotelsCodes),
                    "GuestNationality" => $country,
                    // "GuestNationality" => "AE",
                    "PaxRooms" => $rooms,
                    "ResponseTime" => 23.0,
                    "IsDetailedResponse" => true,
                ]
            )->json();
    }

    static function prebook($code) {
        return Http::withHeaders(self::$headers)->post(
            config('services.hbo.base_url').'/PreBook',
            [
                "BookingCode" => $code,
                'PaymentMode' => 'Limit'
            ]
        );
    }

    static function book($data)
    {
        return Http::withHeaders(self::$headers)->post(
            config('services.hbo.base_url').'/book',$data
        );
    }

    static function bookingdetails($data) {
        return Http::withHeaders(self::$headers)->post(
            config('services.hbo.base_url').'/BookingDetail',$data
        );
    }
}
