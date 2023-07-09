<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hotel_id',
        'booking_id',
        'ref_no',
        'tbocode',
        'bookingcode',
        'roomcode',
        'roomdetails',
        'no_of_adults',
        'no_of_children',
        'email',
        'phone',
        'checkin',
        'checkout',
        'confimationcode',
        'status',
    ];

    function getref() {
        $prevbooking = $this->orderBy('id', 'DESC')->first();
        $ref_no = (!is_null($prevbooking) && $prevbooking !== 1) ? strtotime(now()).Str::random(3).$prevbooking->id + 1 : strtotime(now()). Str::random(3).'1';
        return $ref_no;
    }
}
