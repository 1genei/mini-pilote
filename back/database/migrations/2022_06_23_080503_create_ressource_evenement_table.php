<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourceEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressource_evenement', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('ressource_id')->nullable();
            $table->foreignId('evenement_id')->nullable();
            $table->float('prix')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ressource_evenement');
    }
}
