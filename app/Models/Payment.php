<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
