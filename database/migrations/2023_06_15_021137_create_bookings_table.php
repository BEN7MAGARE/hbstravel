<?php

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Hotel::class);
            $table->string('ref_no')->unique();
            $table->string('tbocode')->nullable();
            $table->string('bookingcode')->nullable();
            $table->string('roomname')->nullable();
            $table->string('inclusion')->nullable();
            $table->string('no_of_adults')->default(0);
            $table->string('no_of_children')->default(0);
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->string('confimationcode')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('bookings');
    }
}
