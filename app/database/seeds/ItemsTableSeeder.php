<?php

class ItemsTableSeeder extends Seeder {

	public function run()
	{
	DB::table('items')->delete();

	$items = array(
		array(
			'owner_id' => 1,
			'name' => 'Lait',
			'done' => false
			),
		array(
			'owner_id' => 1,
			'name' => 'Chien',
			'done' => true
			),
		array(
			'owner_id' => 1,
			'name' => 'Chat',
			'done' => false
			),


		);
	DB::table('items')->insert($items);
		}
}
