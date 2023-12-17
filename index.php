<?php

$users = [
	'Adam' => 8,
	'Julie' => 13,
	'Karima' => 11,
	'Anna' => 11,
	'Marina' => 9,
	'Mohamed' => 7,
	'Arthur' => 12,
	'Morgan' => 14
];

$newUsers = [
	'Hector' => 6,
	'Manon' => 8,
	'Elisa' => 10,
	'Leo' => 12,
	'Enzo' => 13,
	'Ada' => 9
];

$users += $newUsers;
asort($users);
// var_dump($userCollectes);

function enfants($age){
    return $age < 10;
}

function adolescents($age){
    return $age >= 10;
}

$newChildrens = array_filter($users, 'enfants');
$newAdo = array_filter($users, 'adolescents');

var_dump($newChildrens) . '<br>';
var_dump($newAdo) . '<br>';

?>