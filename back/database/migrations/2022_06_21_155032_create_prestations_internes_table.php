<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsInternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations_internes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('evenement_id')->nullable();
            $table->foreignId('commande_id')->nullable();
            $table->foreignId('article_interne_id')->nullable();
            $table->foreignId('option_prestation_interne_id')->nullable();
            $table->foreignId('parcours_id')->nullable();
            $table->dateTime('debut')->nullable();
            $table->float('duree')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestations_internes');
    }
}
