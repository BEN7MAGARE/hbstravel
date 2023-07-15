<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'CardNumber',
        'CvvNumber',
        'CardExpirationMonth',
        'CardExpirationYear',
        'CardHolderFirstName',
        'CardHolderlastName',
        'CardHolderAddress',
        'BillingCurrency',
        'AddressLine1',
        'AddressLine2',
        'City',
        'PostalCode',
        'CountryCode',
        'DaysRate',
        'DaysPrice',
        'TotalTax',
        'ExtraGuestCharges',
        'BillingAmount',
        'status',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
