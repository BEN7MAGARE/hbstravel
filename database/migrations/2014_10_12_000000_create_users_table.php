<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ref_no')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 18)->unique();
            $table->string('facebook_token');
            $table->string('google_token');
            $table->string('twitter_token');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role', 50);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
