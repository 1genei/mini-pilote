<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsExternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations_externes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('evenement_id')->nullable();
            $table->foreignId('commande_id')->nullable();
            $table->foreignId('article_externe_id')->nullable();
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
        Schema::dropIfExists('prestations_externes');
    }
}
