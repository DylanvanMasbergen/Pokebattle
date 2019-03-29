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

	public function attack($attacker, $defender)
	{	
		
		if($attacker->type === $defender->weakness->name){
            $attackDmg = $this->attackDmg * $defender->weakness->multiplier;
            $attackMessage = $attacker->name.' attacked '.$defender->name.' and the attack was lethal, it did '.$attackDmg.'dmg';
		}
		else if ($attacker->type === $defender->resistance->name) {
            $attackDmg = $this->attackDmg - $defender->resistance->resistance;
            $attackMessage = $attacker->name. ' attacked '.$defender->name.' and the attack was non-lethal, it did '.$attackDmg.'dmg';
		}
		else{
            $attackDmg = $this->attackDmg;
            $attackMessage = $attacker->name.' attacked '.$defender->name.' and did '.$attackDmg.'dmg';
        }
        return($attackMessage);
       	$defender->doDmg($defender, $attackDmg);
	}
}
