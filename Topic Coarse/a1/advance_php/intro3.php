<?php 
	class Animal
	{
		public $name;
		public function sound ($sound)
			{
				echo "Sound of{$this->name} is {$sound}<br>";
			}
	}
	$tiger=new Animal();
	$tiger->name="TiGeR";
	// echo $tiger->name;
	$tiger->sound("roar");

?>