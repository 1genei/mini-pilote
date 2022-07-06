<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisArticleExterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis_article_externe', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('devis_id')->nullable();
            $table->foreignId('article_externe_id')->nullable();
            $table->integer('quantite')->nullable();
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
        Schema::dropIfExists('devis_article_externe');
    }
}
