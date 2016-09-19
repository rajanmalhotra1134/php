<?php 
	class Animal
	{
		public $name;
		public function sound($sound)
		{
			echo "Sound of{$this->name} is {$sound}<br>";
		}
	}
	$tiger=new Animal();
	$tiger->name="TIgeR";
	// echo $tiger->name;
	$tiger->sound("roar");

 ?>