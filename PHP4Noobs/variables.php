<?php 

$name = "Victor";

echo $name . PHP_EOL;

$name = "Noobz1n";

echo $name . PHP_EOL;

$age = 19 . PHP_EOL;

$data = [
    'name' => 'victor',
    'age' => 22,
    'city' => 'Em algum lugar',
    'status' => true
];
var_dump($data['city']) . PHP_EOL;
echo $data['status'] . PHP_EOL;

// define uma constante, o valor nunca vai mudar, primeiro coloca o nome e depois o valor, no caso o nome foi youtube e o valor o link.
define('youtube', 'https://www.youtube.com');
echo youtube;












?>