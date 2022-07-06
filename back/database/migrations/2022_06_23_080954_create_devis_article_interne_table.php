<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisArticleInterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_article_interne', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('devis_id')->nullable();
            $table->foreignId('article_interne_id')->nullable();
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
        Schema::dropIfExists('devis_article_interne');
    }
}
