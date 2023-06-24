<?php 
//isset verifica se a posicao no objeto ou array existe



if (!isset($argv[1])) {
    die('Preencha um argumento. Ex: argumentScript.php 23');
};

$age = $argv[1];

if (!is_numeric($age)) {
    die('Cara manda um numero.');
};

if ($age >= 18) {
    echo "vc eh maior de idade" . PHP_EOL;
} else {
    echo "vc n eh maior de idade, vc tem $age anos" . PHP_EOL;
};







?>