<?php

class Attack
{
	public $attackName;
	public $attackDmg;

	public function __construct($attackName,$attackDmg)
	{
		$this->attackName = $attackName;
		$this->attackDmg = $attackDmg;
	}
}