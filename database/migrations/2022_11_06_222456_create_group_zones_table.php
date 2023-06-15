<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_zones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id');
            $table->string('groupZoneCode');
            $table->string('name')->nullable();//description dans l'api il va falloir chercher destination['name']['content]
            $table->string('zones')->nullable();//array of integer (string => integers separés par des virgules);
            //TODO :il y a un attribut zones de type array of integer (à voir si on doit pas mettre une relation vers la table zone)
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
        Schema::dropIfExists('group_zones');
    }
}
