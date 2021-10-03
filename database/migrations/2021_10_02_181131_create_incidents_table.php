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
            $table->boolean('status');
            $table->timestamp('created_at', 0);
        });

        Schema::table('incidents', function(Blueprint $table)
        {
            //$table->foreignId('criticality_id')->constrained('criticalities');
            //$table->foreignId('fk_type_id')->constrained('types');
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
