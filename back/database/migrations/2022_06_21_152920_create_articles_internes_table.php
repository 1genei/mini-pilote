<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesInternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_internes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('circuit_id')->nullable();
            $table->foreignId('type_prestation_interne_id')->nullable();
            $table->foreignId('voiture_id')->nullable();
            $table->string('libelle')->nullable();
            $table->integer('nombre_tours')->nullable();
            $table->float('prix_vente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_internes');
    }
}
