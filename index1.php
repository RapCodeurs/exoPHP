<?php

$movie = "Children of Men";
$rates = [3, 4, 2, 4, 3, 5, 0];
$comment = ["Albert", "Super film, j'ai adoré!"];

$total = array_sum($rates);
//echo "$total<br>";
$num = count($rates);
//echo "$num<br>";
$moyenne = $total/$num;
//echo "$moyenne<br>";

$name = $comment[0];
$nameLenght = strlen($name);

$indexRepeat = str_repeat("*", $nameLenght - 1);

$newName = $name[0] . $indexRepeat;


// echo "$newName<br><br>";

$array = [2, 29, 1, 6];
$newarray = array(1 => 'Joumessi', 2 => 'Gervais', 3 => 'Maurel');


$firstnumber = $array[0];
var_dump($newarray) . '<br>';
//$index = $newarray[count($newarray) - 1] . '<br>';

//var_dump($index);

$isoCodes = [
    "Argentine" => "AR",
    "Belgique" => "BE",
    "Chili" => "CL",
    "Equateur" => "EC"
];

//var_dump($isoCodes) .'<br>';


$countries = ['Argentine', 'Belgique', 'Chili', 'Equateur'];
$isoCode = [
    'Argentine' => 'AR',
    'Belgique' => 'BE',
    'Chili' => 'CL',
    'Equateur' => 'EC'
];
echo $countries[1]; 
echo $isoCode['Argentine']; 


$names = ['Lea', 'Morgan', 'Lionel', 'Marina'];
foreach($names as $key => $name) {
    echo "Le prénom " . $name . " est à la clé " . $key . " du tableau.\n <br>";
};


?>