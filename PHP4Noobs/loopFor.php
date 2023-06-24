<?php 

$agua = 0;

echo "Victor está com sede" . PHP_EOL;

for($agua; $agua <= 10; $agua++) {
    if ($agua == 1) {
        echo "Victor tomou " . $agua . " copo de agua hoje" . PHP_EOL;
    } else {
        echo "Victor tomou " . $agua . " copos de agua hoje" . PHP_EOL;
    }
}

echo "Victor está hidratado." . PHP_EOL;

$tabuada = 5;

for ($i = 0; $i <=10; $i++) {
    echo "$tabuada x $i = " . $tabuada*$i . PHP_EOL;
};


?>