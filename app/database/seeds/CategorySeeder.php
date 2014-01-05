<?php
class CategorySeeder extends Seeder {

	public function run(){
		$Categories = array(
			array('title'=>'Casa de Pedra','slug'=>'casa-de-pedra'),
			array('title'=>'Capoeira','slug'=>'capoeira'),
			array('title'=>'Hospedagem','slug'=>'hospedagem'),
			array('title'=>'Novidades','slug'=>'novidades'),
		);

		DB::table('categories')->insert($Categories);
	}
}
?>