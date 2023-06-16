<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'booking_id',
        'ref_no',
        'bookingcode',
        'roomcode',
        'roomdetails',
        'no_of_adults',
        'no_of_children',
        'email',
        'phone',
        'checkin',
        'checkout',
        'status',
    ];

    function getref() {
        $prevbooking = $this->booking->orderBy('id', 'DESC')->first();
        $ref_no = (!is_null($prevbooking) && $prevbooking !== 1) ? strtotime(now()) . '-' . $prevbooking->id + 1 : strtotime(now()) . '-1';
        return $ref_no;
    }
}
