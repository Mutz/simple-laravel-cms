<?php
class CategorySeeder extends Seeder {

	public function run(){
		$Categories = array(
			array('title'=>'Casa de Pedra'),
			array('title'=>'Capoeira'),
			array('title'=>'Hospedagem'),
		);

		DB::table('categories')->insert($Categories);
	}
}
?>