<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('contact_id')->nullable();
            $table->foreignId('revendeur_id')->nullable();
            $table->foreignId('code_id')->nullable();
            $table->string('statut')->nullable();
            $table->string('source')->nullable();
            $table->string('mode_paiement')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->float('remise')->nullable();
            $table->string('motif_remise')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
