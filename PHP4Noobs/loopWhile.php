<?php 

$healthPoints = 100;
$maxHealthPoints = 100;

$monsterAttackDamage = 5;

while ($healthPoints > 0) {
    echo "HP $healthPoints/$maxHealthPoints" . PHP_EOL;
    echo "Personagem atacado! -$monsterAttackDamage de HP" . PHP_EOL;

    $healthPoints -= $monsterAttackDamage;

    if ($healthPoints <= 0) {
        echo "Personagem morreu.";
    }

};














?>