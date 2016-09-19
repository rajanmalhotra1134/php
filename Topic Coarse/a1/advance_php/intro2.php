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
		// $cat=new Animal();
		$tiger->name="Tiger";
		echo $tiger->name;
		$tiger->sound("roar");
		// echo $cat->name;
		// $cat->sound("meeowww");
		// $cat->name="cat";

?>