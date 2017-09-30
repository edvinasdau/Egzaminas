
<?php

class Person {

	public $name;
	public $surname;
	public $age;

	public function asmensDuomenys(){
		echo $this->name . $this->surname . $this->age ;
	}
}

class Staff extends Person {
	public $name;
	public $surname;
	public $age;

	public function asmensDuomenys(){
		echo $this->name . $this->surname . "Darbuotojas" ;
	}

}

class Client extends Person {
	public $name;
	public $surname;
	public $age;
}
