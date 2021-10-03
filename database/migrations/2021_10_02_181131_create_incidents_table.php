<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id('incident_id');
            $table->string('title');
            $table->longText('description');
            $table->unsignedBigInteger('fk_criticality_id');
            $table->unsignedBigInteger('fk_type_id');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criticalities');
        Schema::dropIfExists('types');
        Schema::dropIfExists('incidents');
    }
}
