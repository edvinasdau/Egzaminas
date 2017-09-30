<?php

class Person {

	public $name;
	public $surname;
	public $age;


	public function __construct($a1, $a2, $a3){
		$this->name = $a1;
		$this->surname = $a2;
		$this->age = $a3;
		echo $this->name . " turi pavarde " . $this->surname. " ir yra " . $this->age . " metu amziaus";
	}
}

$kazkas = new Person("Algis", "Pavardenis", "43");
