<?php

class Pokemon
{
	public $name;
	public $type;
	public $hp;
	public $resistance;
	public $weakness;
	public $attacks = [];
	public $hitPoints;
	

	public function __construct($name, $type, $hp, $resistance, $weakness, $attacks)
	{
		$this->name = $name;
		$this->type =$type;
		$this->hp = $hp;
		$this->hitPoints = $hp;
		$this->resistance = $resistance;
		$this->weakness = $weakness;
		$this->attacks = $attacks;
		
		

	}

	public function attack($attack, $attacker, $defender)
	{

	 	  if ($attacker->type == $defender->weakness->name) {
            echo " The attack was lethal!. ";
            echo "<br>";
            $attackDmg = $attack->attackDmg * $defender->weakness->multiplier;
            echo $attackDmg.' dmg gedaan ';

            } else if ($attacker->type === $defender->resistance->name) {
            echo "The attack sucked";
            echo "<br>";
            $attackDmg = $attack->attackDmg - $defender->resistance->resistance;
            echo $attackDmg.' dmg gedaan ';


	        } else {
	            echo "The attack hit them but they are still able to fight back.";
	            echo "<br>";
	            $attackDmg = $attack->attackDmg;
	        }

	        //takes the amount of damage off the attacked pokemon's hitPoints
        	$attack_result = $defender->hitPoints - $attackDmg;

        	//puts all the results into $result1
        	$result1 = [$attackDmg, $attack_result];

        	//saves the result in the pokemon
        	$defender->hitPoints = $attack_result;

        	//returns the $result1 to the index.php 	

        	return $result1;
	}
}