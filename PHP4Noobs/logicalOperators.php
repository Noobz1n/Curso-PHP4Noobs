<?php 
// operadores: &&   //   ^   !



// operador 'E' AND &&          duas condições tem que ser verdadeiras
$empregado = true;
$homeOffice = false;

var_dump($empregado && $homeOffice);

// operador 'OU' OR ||         uma condição tem que ser verdadeira
$empregado = true;
$homeOffice = false;

var_dump($empregado || $homeOffice);

//operador 'OU EXCLUSIVO' XOR ^        as condições não podem ser iguais, uma tem que ser oposta
$empregado = true;
$homeOffice = false;

var_dump($empregado ^ $homeOffice);

//opreador 'Não' NOT !
$empregado = true;

var_dump(!$empregado); // se colocar o ! antes da variavel, se o valor dela for true, vai passar a ser false.



















?>