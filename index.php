<?php

	require'attack.php';
	require'pokemon.php';
	require'type.php';
	require'resistance.php';
	require'weakness.php';

//List of engergyTypes
$types = [
		new Type ("Lightning"),
		new Type ("Water"),
		new Type ("Fire"),
		new Type ("Gas")
];

//pokemon 1
$pokemon1 = new pokemon(
	"Cop",
	$types[0],
	150,
	new Resistance($types[2], 20),
    new Weakness($types[1], 1.5),
	[
		new attack ('"Shot to the chest"', 100),
		new attack ('"On tha Goddamn ground!"', 50)
	]
);

//pokemon 2
$pokemon2 = new pokemon(
	"Gangsta",
	$types[1],
	150,	
	new Resistance($types[3], 20),
    new Weakness($types[1], 1.5),
	[
		new attack ('"Bust a cap in ur ass"', 100),
		new attack ('"Pistol Whip"', 50)
	]
);
 
 //Shows the attacks and the amount of damage dealt to the opponent.
$result1 = $pokemon2->attack($pokemon2->attacks[1], $pokemon2, $pokemon1);

	echo $pokemon2->name . " attacks " . $pokemon1->name . " with " . $pokemon2->attacks[1]->attackName . " and deals " . $result1[0] . "damage.";
	echo "<br>";
	echo $pokemon1->name . " has " . $result1[1] . " hitPoints of the " . $pokemon2->hitPoints . " left.";



//prettyPrint($pokemon1);
//prettyPrint($pokemon2);

function prettyPrint($var)
{
	echo'<pre>';
	print_r($var);
	echo'</pre>';
	
}
