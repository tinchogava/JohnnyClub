<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$category1 = array(
			
				'name' => 'Vinos Tintos', 
				'description' => 'Vinos de lujo', 
				'color' => '#440022'
			);
		$category2 = array(
				'name' => 'Vinos Espumantes', 
				'description' => 'Vinos espumantes de lujo', 
				'color' => '#445500'
		);

		$data = array($category1, $category2);

		Category::insert($data);

	}
}