<?php 
	class Animal
	{
		public $name;
		public function sound($sound)
		{
			echo "Sound of {$this->name} is {$sound}<br>";
		}
	}
	$tiger = new Animal();
	$cat = new Animal();
	$tiger->name ="Tiger";
	echo $tiger->name;
	$tiger->sound("roar");
	$cat->sound("meeoww");
	$cat->name="Cat";
	echo $cat->name;


 ?>