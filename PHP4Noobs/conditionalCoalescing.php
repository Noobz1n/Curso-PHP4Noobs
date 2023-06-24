<?php 

$user = [
    'name' => 'Victor',
    'age' => 19,
    'employed' => false
];

// caso nao exista nome no usuario, retorne teste
echo $user['name'] ?? 'teste';













?>