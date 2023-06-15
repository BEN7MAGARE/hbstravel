<?php

namespace App\Console\Commands;

use App\Models\Country;
use App\Models\Hotel;
use App\Services\TboService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SyncHotelsFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:hotels-from-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Hotels From Api';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(TboService $service) {
        ini_set('memory_limit', '-1');

        echo PHP_EOL .
            "> Syncing hotels from api : starting ..." .
            PHP_EOL . PHP_EOL;

        $this->syncHotels($service);

        $this->syncCountries($service);

        echo PHP_EOL . PHP_EOL .
            "> Syncing hotels from api : finished !" .
            PHP_EOL . PHP_EOL;
    }

    private function syncHotels($tboService) {
        echo "> Requesting hotel codes from api ..." . PHP_EOL . PHP_EOL;
        $response = $tboService::getHotelsCodes();

        echo "> Checking for new hotels ..." . PHP_EOL . PHP_EOL;
        $newHotels = $this->checkForNewHotels(
            $response["HotelCodes"],
            $tboService
        );

        if (count($newHotels) > 0) {
            echo "> Creating new hotels ..." . PHP_EOL . PHP_EOL;
            $this->createNewHotels($newHotels);
        }
    }

    private function syncCountries($tboService) {
        echo PHP_EOL . PHP_EOL .
            "> Requesting countries from api ..." .
            PHP_EOL . PHP_EOL;
        $response = $tboService::getCountries();

        echo "> Checking for new countries ..." . PHP_EOL . PHP_EOL;
        $newCountries = $this->checkForNewCountries(
            $response["CountryList"]
        );

        if (count($newCountries) > 0) {
            echo PHP_EOL . PHP_EOL .
                "> Creating new countries ..." .
                PHP_EOL . PHP_EOL;
            $this->createNewCountries($newCountries);
        }
    }

    private function checkForNewHotels($hotelCodes, $tboService) {
        return $this->singleTask(
            function($bar) use($hotelCodes, $tboService) {
                $bar->setMaxSteps(count($hotelCodes));

                $allHotelCodes = Hotel::pluck('tbo_code')->toArray();
                $newHotels = [];

                $this->poolingHotelDetailsRequests(
                    $tboService,
                    array_diff($hotelCodes, $allHotelCodes),
                    function($response) use(&$newHotels, $bar) {
                        $hotelDetails = json_decode($response->getBody(), true);
                        $bar->advance();

                        if ($hotelDetails["Status"]["Code"] == 200) {
                            $hotelImage = '';

                            if (
                                array_key_exists("Images", $hotelDetails["HotelDetails"][0]) &&
                                count($hotelDetails["HotelDetails"][0]["Images"]) > 0
                            ) {
                                foreach($hotelDetails['HotelDetails'][0]['Images'] as $image) {
                                    if (@getimagesize($image)) {
                                        $hotelImage = $image;
                                        break;
                                    }
                                }
                            }

                            $newHotels[] = [
                                'code' => $hotelDetails["HotelDetails"][0]["HotelCode"],
                                'countryCode' => $hotelDetails["HotelDetails"][0]["CountryCode"],
                                'image' => $hotelImage,
                                'name' => $hotelDetails["HotelDetails"][0]["HotelName"],
                                'address' => $hotelDetails["HotelDetails"][0]["Address"],
                                'city' => $hotelDetails["HotelDetails"][0]["CityName"],
                                'description' => $hotelDetails["HotelDetails"][0]["Description"],
                            ];
                        }
                    }
                );

                return $newHotels;
            },
            false,
            true
        );
    }

    private function checkForNewCountries($countries) {
        return $this->singleTask(
            function($bar) use($countries) {
                $bar->setMaxSteps(count($countries));
                $allCountries = Country::pluck('code')->toArray();
                $newCountries = [];

                foreach($countries as $country) {
                    if (!in_array($country["Code"], $allCountries)) {
                        $newCountries[] = $country;
                    }

                    $bar->advance();
                }

                return $newCountries;
            },
            false,
            true,
        );
    }

    private function createNewHotels($newHotels) {
        $this->singleTask(
            function($bar) use($newHotels) {
                $bar->setMaxSteps(count($newHotels));

                foreach($newHotels as $hotel) {
                    $newHotel = Hotel::create([
                        'tbo_code' => $hotel["code"],
                        'name' => $hotel["name"],
                        'longitude' => "0",
                        'latitude' => "0",
                        'country_code' => $hotel["countryCode"],
                        'address' => $hotel["address"],
                        'city' => $hotel["city"],
                        'description' => $hotel["description"]
                    ]);
                    $newHotel->images()->create([
                        'hotel_id' => $newHotel->id,
                        'imageTypeCode' => '1',
                        'path' => $hotel["image"],
                        'order' => 1,
                        'visual_order' => 1,
                    ]);

                    $bar->advance();
                }
            },
            true,
            true
        );
    }

    private function createNewCountries($newCountries) {
        $this->singleTask(
            function($bar) use($newCountries) {
                $bar->setMaxSteps(count($newCountries));

                foreach($newCountries as $country) {
                    Country::create([
                        'isoCode' => $country["Code"],
                        'description' => $country["Name"],
                        'code' => $country["Code"],
                    ]);

                    $bar->advance();
                }
            },
            true,
            true
        );
    }

    private function poolingHotelDetailsRequests(
        $tboService,
        $newHotelCodes,
        $callback
    ) {
        $requests = $tboService::getHotelDetailsRequests();

        $pool = new \GuzzleHttp\Pool(
            new \GuzzleHttp\Client(),
            $requests($newHotelCodes),
            [
                'concurrency' => 100,
                'fulfilled' => $callback
            ]
        );

        $promise = $pool->promise();
        $promise->wait();
    }

    private function singleTask(
        $task,
        $hasTransaction = false,
        $hasProgressBar = false
    ) {
        try {
            if ($hasTransaction) { DB::beginTransaction(); }

            $bar = null;
            if ($hasProgressBar) {
                $bar = $this->output->createProgressBar();
                $bar->setFormat('very_verbose');
                $bar->start();
            }

            $result = $task($bar);

            if ($hasTransaction) { DB::commit(); }
            if ($hasProgressBar) { $bar->finish(); }

            return $result;
        }
        catch(\Exception $e) {
            if ($hasTransaction) { DB::rollBack(); }
            echo PHP_EOL . $e->getMessage();
            exit(0);
        }
    }
}
