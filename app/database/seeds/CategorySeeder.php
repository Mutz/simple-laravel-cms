<?php
class CategorySeeder extends Seeder {

	public function run(){
		$Categories = [
			['title'=>'Casa de Pedra'],
			['title'=>'Capoeira'],
			['title'=>'Hospedagem'],
		];

		DB::table('categories')->insert($Categories);
	}
}
?>