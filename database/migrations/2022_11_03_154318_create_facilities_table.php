<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('foreign_id');
            $table->string('foreign_table')->nullable();
            $table->integer('ageFrom')->nullable();
            $table->integer('amount')->nullable();
            $table->string('applicationType')->nullable();
            $table->string('currency')->nullable();
            $table->string('dateFrom')->nullable();
            $table->string('dateTo')->nullable();
            $table->string('description')->nullable();
            $table->integer('distance')->nullable();
            $table->integer('facilityCode');
            $table->integer('facilityGroupCode');
            $table->string('facilityName')->nullable();
            $table->boolean('indFee')->nullable();
            $table->boolean('indLogic')->nullable();
            $table->boolean('indYesOrNo')->nullable();
            $table->integer('number')->nullable();
            $table->integer('order')->nullable();
            $table->string('timeFrom')->nullable();
            $table->string('timeTo')->nullable();
            $table->boolean('voucher')->nullable();
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
        Schema::dropIfExists('facilities');
    }
}
