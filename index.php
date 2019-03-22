<?php

	require'attack.php';
	require'pokemon.php';

//pokemon
$pokemon1 = new pokemon(
	"Pikachu",
	150,
	20,
	"Electric",
	[
		new attack ('U just got lit up', 100),
		new attack ('spit in face', 50)
	]
);

$pokemon2 = new pokemon(
	"Yomomma",
	130,
	40,
	"Flipflop",
	[
		new attack ('flipflop slap', 50),
		new attack ("daddy's belt", 100)
	]
);


prettyPrint($pokemon1);
prettyPrint($pokemon2);

function prettyPrint($var)
{
	echo'<pre>';
	print_r($var);
	echo'</pre>';
	
}
