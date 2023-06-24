<?php 

$name = 'Victor';
$employed = false;
$age = 19;

if ($name == 'Adriano') {
    echo "Seu nome é adriano." . PHP_EOL;
} else if ($name == 'Arrascaeta') {
    echo "Seu nome é arrascaeta vulgo melhor uruguaio em atividade no futebol brasileiro" . PHP_EOL;
} else {
    echo "Seu nome é victor :)" . PHP_EOL;
}

if ($age >= 18 && $employed == true) {
    echo "Você é maior de idade e está empregado" . PHP_EOL;
} else if ($age >= 18 && $employed == false){
    echo "Você é maior de idade e está desempregado, me arrumem um estágio por favor" . PHP_EOL;
} else {
    echo "Você é menor de idade :D";
}














?>