<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirplaneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('airplanes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('airplane_No');
            $table->string('airplane_Name');
            $table->integer('airline_No');
            $table->timestamp('airplane_DOQ');
            $table->string('airplane_Departure_City');
            $table->string('airplane_Arrival_City');
            $table->timestamp('airplane_Departure_Time');
            $table->timestamp('airplane_Arrival_Time');
            $table->integer('airplane_FirstClass_Num');
            $table->integer('airplane_BusinessClass_Num');
            $table->integer('airplane_EconomyClass_Num');
            $table->string('airplane_note')->nullable();
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
        //
    }
}
