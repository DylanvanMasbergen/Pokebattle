<?php

class Pokemon
{
	public $name;
	public $hp;
	public $defense;
	public $attacks = [];
	public $type;

	public function __construct($name, $hp, $defense, $attacks, $type)
	{
		$this->name = $name;
		$this->hp = $hp;
		$this->defense = $defense;
		$this->attacks = $attacks;
		$this->type =$type;

	}

	public function doDamage()
	{
		
	}


}