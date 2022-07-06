<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationInterneOptionPrestationInterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestation_interne_option_prestation_interne', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('prestation_interne_id')->nullable();
            $table->foreignId('option_prestation_interne_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestation_interne_option_prestation_interne');
    }
}
