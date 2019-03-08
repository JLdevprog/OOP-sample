<?php

//Create object as main object.
//Make attribut to detail it.
//Set an Origin and condition Bonus from it.
//Set an Equipment to Slot.

class character{

	protected $id;
	protected $name;

	protected $origin;
	protected $bonus;

	protected $life_p = 100;
	protected $attack_p = 10;
	protected $defence_p = 5;
	protected $speed_p = 3;
	protected $power_p = 50;
	protected $xp_p = 0;

	protected $slot1;
	protected $slot2;
	protected $slot3;

	public function __construct($name){
		$this->name=$name;
	}

	public function set_origin($origin){
		$this->origin=$origin;
		if($this->origin=="human"){
			$this->bonus="Kind of Mind";
		}
		else{
			$this->origin="Unstated";
		}
	}
	public function get_origin(){
		return $this->origin;
	}

	public function set_slot1($slot1){
		$this->slot1=$slot1;
	}
	public function get_slot1(){
		return $this->slot1;
	}
	public function set_slot2($slot2){
		$this->slot2=$slot2;
	}
	public function get_slot2(){
		return $this->slot2;
	}
	public function set_slot3($slot3){
		$this->slot3=$slot3;
	}
	public function get_slot3(){
		return $this->slot3;
	}
}

class item{

	protected $id;
	protected $name;
	protected $life_p;
	protected $attack_p;
	protected $defence_p;
	protected $speed_p;
	protected $power_p;

	public function __construct
		($name,$life_p,$attack_p,$defence_p,$speed_p,$power_p){
			$this->name=$name;
			$this->life_p=$life_p;
			$this->attack_p=$attack_p;
			$this->defence_p=$defence_p;
			$this->speed_p=$speed_p;
			$this->power_p=$power_p;
		}
}


$JL = new character("John");

$JL->set_origin("human");

$stick = new item("Stick",10,5,2,1,8);
$cover = new item("Cover",20,1,5,2,6);

$JL->set_slot1($stick);
$JL->set_slot3($cover);

?><pre><?php
var_dump($JL);
?></pre><?php



?>