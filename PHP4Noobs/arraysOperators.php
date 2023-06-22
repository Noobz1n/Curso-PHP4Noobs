<?php 

$user = [
    'name' => 'victor',
    'age' => 19
];


$workplace = [
    'companyName' => 'Tesla',
    'role' => 'backend developer'

];

$all = $user + $workplace;

//print_r função expecifica pra imprimir arrays
print_r($all);




$userOne = [
    'name' => 'Arrascaeta',
    'age' => 29
];

$userTwo = [
    'name' => 'Gabigol',
    'age' => 26 
];

var_dump($userOne == $userTwo);
var_dump($userOne != $userTwo);
var_dump($userOne !== $userTwo)




?>