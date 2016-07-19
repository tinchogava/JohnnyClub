<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$product1 = array(
				'name' 			=> 'Gavasci Ramon Augusto',
				'description' 	=> 'Vino rico',
				'size' 			=>  750,
				'price' 		=> 275.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwio5OTFgNLLAhXEkpAKHdm1D-IQjRwIBw&url=http%3A%2F%2Fwww.winery.com.ar%2Fvinos%2Fvino-tinto.html&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);
		$product2 = array(
				'name' 			=> 'Vino 2',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 255.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiA_vHghNLLAhWBGJAKHV2UBW0QjRwIBw&url=http%3A%2F%2Fwww.liverpool.com.mx%2Ftienda%2Ftipos-de-vino%2Fcat4370435&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);
		$product3 = array(
				'name' 			=> 'Vino 3',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 225.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjisOuGhdLLAhUFFpAKHQ_iBSQQjRwIBw&url=http%3A%2F%2Ftravelreportmx.com%2Fhistoria-del-vino%2F&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);
		$product4 = array(
				'name' 			=> 'Vino 4',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 165.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjisOuGhdLLAhUFFpAKHQ_iBSQQjRwIBw&url=http%3A%2F%2Ftravelreportmx.com%2Fhistoria-del-vino%2F&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);
		$product5 = array(
				'name' 			=> 'Vino 5',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 135.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiS-82jhdLLAhVEE5AKHb4QAikQjRwIBw&url=http%3A%2F%2Farchivo.e-consulta.com%2Fblogs%2Fquidnovi%2F%3Ftag%3Dinfartos&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);
		$product6 = array(
				'name' 			=> 'Vino 6',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 135.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiOwqTEhdLLAhUBWpAKHSEhCDEQjRwIBw&url=https%3A%2F%2Fconurbanonoticias.wordpress.com%2F2011%2F04%2F11%2F%25E2%2580%259Cdios-solo-hizo-el-agua-pero-el-hombre-hizo-el-vino%25E2%2580%259D%2F&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);
		$product7 = array(
				'name' 			=> 'Vino 7',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 110.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiT4aHYhdLLAhWDkpAKHfQNC5cQjRwIBw&url=http%3A%2F%2Fwww.sabordesiempre.com%2Fvinos%2Fpor-edad%2Fvino-joven&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			);
		$product8 = array(
				'name' 			=> 'Vino 7',
				'description' 	=> 'Vino un toque menos rico',
				'size' 			=>  750,
				'price' 		=> 90.00,
				'image' 		=> 'https://www.google.com.ar/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwism9_phdLLAhUFvJAKHfr2D00QjRwIBw&url=http%3A%2F%2Fwww.gq.com.mx%2Fbon-vivant%2Fvinos%2Farticulos%2Flos-mejores-vinos-tintos-rojos-mexicanos%2F3986&psig=AFQjCNH_VbkqXbFOQYQ6_P_GWam3op4b_A&ust=1458657435520167',
				'visible' 		=> 1,
				'category_id' 	=> 1,
				'varietal_id'	=> 1,
				'winery_id'		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			);

		$data = array($product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8);

		Product::insert($data);

	}

}