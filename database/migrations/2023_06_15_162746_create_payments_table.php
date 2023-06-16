<?php

use App\Models\Booking;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Booking::class);
            $table->string('CardNumber')->nullable();
            $table->string('CvvNumber')->nullable();
            $table->string('CardExpirationMonth')->nullable();
            $table->string('CardExpirationYear')->nullable();
            $table->string('CardHolderFirstName')->nullable();
            $table->string('CardHolderlastName')->nullable();
            $table->string('CardHolderAddress')->nullable();
            $table->string('BillingCurrency')->nullable();
            $table->string('AddressLine1')->nullable();
            $table->string('AddressLine2')->nullable();
            $table->string('City')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('CountryCode')->nullable();
            $table->string('DaysRate')->nullable();
            $table->string('DaysPrice')->nullable();
            $table->string('TotalTax')->nullable();
            $table->string('ExtraGuestCharges')->nullable();
            $table->string('BillingAmount')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
