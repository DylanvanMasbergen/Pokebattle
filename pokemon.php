<?php

abstract class Pokemon
{
	protected $name;
	protected $hp;
	protected $hitPoints;
	private $data = array();

	protected function __construct($name, $hp)
	{
		$this->name = $name;
		$this->hp = $hp;
		$this->hitPoints = $hp;
		
	}

	public function __get($name)
	{
        return $this->$name;
	}

	public function setProperty($propertyName, $value)
	{
		$this->$propertyName = $value;
	}

	public function doDmg($pokemon,$dmg)
	{
		$hitpoints = $pokemon->hitPoints - $dmg;
		$pokemon->setProperty('hp',$hitpoints);
		echo $pokemon->hp. 'hp left';
	}
}
	class Pikachu extends Pokemon
	{
		protected $type;
		protected $resistance;
		protected $weakness;
		protected $attacks = [];

		public function __construct($name, $type, $hp, $resistance, $weakness, $attacks)
		{
			$this->name = $name;
			$this->type =$type;
			$this->resistance = $resistance;
			$this->weakness = $weakness;
			$this->attacks = $attacks;
			
		}

	}

	class Charmeleon extends Pokemon
	{
		protected $type;
		protected $resistance;
		protected $weakness;
		protected $attacks = [];

		public function __construct($name, $type, $hp, $resistance, $weakness, $attacks)
		{
			$this->name = $name;
			$this->type =$type;
			$this->resistance = $resistance;
			$this->weakness = $weakness;
			$this->attacks = $attacks;
			
		}
	}



