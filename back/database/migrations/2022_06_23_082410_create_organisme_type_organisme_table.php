<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganismeTypeOrganismeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisme_type_organisme', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('organisme_id')->nullable();
            $table->foreignId('type_organisme_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisme_type_organisme');
    }
}
