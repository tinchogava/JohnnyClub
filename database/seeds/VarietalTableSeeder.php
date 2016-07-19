<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Varietal;

class VarietalTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$varietal1 = array(
				'name' => 'Malbec', 
				'description' => 'Uvas malbec de lujo'
			);
			
		$varietal2 = array(
				'name' => 'Sirah', 
				'description' => 'Uvas sirah de lujo'
		);

		$data = array($varietal1, $varietal2);

		Varietal::insert($data);

	}
}