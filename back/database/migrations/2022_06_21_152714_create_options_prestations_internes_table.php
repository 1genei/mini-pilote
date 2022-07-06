<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsPrestationsInternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options_prestations_internes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('type_prestation_interne_id')->nullable();
            $table->string('nom')->nullable();
            $table->float('prix')->nullable();
            $table->string('details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options_prestations_internes');
    }
}
