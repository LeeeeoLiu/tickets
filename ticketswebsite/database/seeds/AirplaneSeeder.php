<?php

use Illuminate\Database\Seeder;

class AirplaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('airplanes')->delete();

    	for ($i=0; $i < 10; $i++) {
    		\App\Airplane::create([
    			'airplane_No'   => $i,
    			'airplane_Name'    => 'airplane_Name'.$i,
    			'airline_No'	=> $i,
    			'airplane_DOQ'	=> $i,
    			'airplane_Departure_City'	=>'airplane_Departure_City'.$i,
    			'airplane_Arrival_City'	=>'airplane_Arrival_City'.$i,
    			'airplane_Departure_Time' => 'airplane_Departure_Time'.$i,
    			'airplane_Arrival_Time' => 'airplane_Arrival_Time'.$i,
    			'airplane_FirstClass_Num' => $i,
    			'airplane_BusinessClass_Num' =>$i,
    			'airplane_EconomyClass_Num'=>$i,
    			'airplane_note' => 'airplane_note'.$i,
    			]);
    	}
    }
}
