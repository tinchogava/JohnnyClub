<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Winery;

class WineryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$winery1 = array(
				'name' 		=> 'Bodega Gavasci', 
				'address' 	=> 'Castellanos 622', 
				'city_id' 	=> 5572,
				'state_id'	=> 13,
				'country_id' 	=> 1 
			);
		$winery2 = array(
				'name' 		=> 'Bodega Trapiche', 
				'address' 	=> 'Ruta 60 S/N', 
				'city_id' 	=> 5799,
				'state_id'	=> 13,
				'country_id' 	=> 1 
			);

		$data = array($winery1, $winery2);

		Winery::insert($data);

	}
}