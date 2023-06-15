<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityTypologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_typologies', function (Blueprint $table) {
            $table->id();
            $table->boolean('ageFromFlag')->nullable();
            $table->boolean('ageToFlag')->nullable();
            $table->boolean('amountFlag')->nullable();
            $table->boolean('appTypeFlag')->nullable();
            $table->integer('code');
            $table->boolean('currencyFlag')->nullable();
            $table->boolean('dateFromFlag')->nullable();
            $table->boolean('dateToFlag')->nullable();
            $table->boolean('distanceFlag')->nullable();
            $table->boolean('feeFlag')->nullable();
            $table->boolean('indYesOrNoFlag')->nullable();
            $table->boolean('logicFlag')->nullable();
            $table->boolean('numberFlag')->nullable();
            $table->boolean('textFlag')->nullable();
            $table->boolean('timeFromFlag')->nullable();
            $table->boolean('timeToFlag')->nullable();
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
        Schema::dropIfExists('facility_typologies');
    }
}
