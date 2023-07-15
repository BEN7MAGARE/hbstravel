<?php

use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('country_code')->nullable();
            $table->string('state_code')->nullable();
            $table->string('destination_code')->nullable();
            $table->integer('zone_code')->nullable();
            $table->string('longitude');
            $table->string('latitude');
            $table->string('category_code')->nullable();
            $table->string('category_group_code')->nullable();
            $table->string('chain_code')->nullable();
            $table->string('accommodation_type_code')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('license')->nullable();
            $table->string('web')->nullable();
            $table->string('last_update')->nullable();
            $table->string('s2c')->nullable();
            $table->integer('ranking')->nullable();
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
        Schema::dropIfExists('hotel');
    }
}
