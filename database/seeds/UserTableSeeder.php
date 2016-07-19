<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user1 = array(
				'name' => 'Martín', 
				'last_name' => 'Gavasci', 
				'email' => 'tinchogava@gmail.com',
				'user'	=> 'tinchogava',
				'password'	=> \Hash::make('Ganima12'),
				'type'	=> 'admin',
				'active' => 1,
				'address' => 'Castellanos 622, Dorrego',
				'city_id' => 5575,
				'state_id' => 13,
				'country_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			);
		$user2 = array(
				'name' => 'Juan Ignacio', 
				'last_name' => 'Tulian', 
				'email' => 'jitulian@outlook.es',
				'user'	=> 'jitulian',
				'password'	=> \Hash::make('JiTulian12'),
				'type'	=> 'user',
				'active' => 1,
				'address' => 'Las Cañas 122, Dorrego',
				'city_id' => 5572,
				'state_id' => 13,
				'country_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			);

		$data = array($user1, $user2);

		User::insert($data);

	}
}