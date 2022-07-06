<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisOptionPrestationInterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_option_prestation_interne', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('devis_id')->nullable();
            $table->foreignId('option_id')->nullable();
            $table->integer('quantite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_option_prestation_interne');
    }
}
