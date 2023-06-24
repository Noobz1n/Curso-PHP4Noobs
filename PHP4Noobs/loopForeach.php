<?php 


$users = [
    [
    'name' => 'Victor',
    'age' => 19,
    'employed' => true // mentira, nao estou, busco estagio
    ],
    [
        'name' => 'arrasca',
        'age' => 29,
        'employed' => true
    ],
    [
        'name' => 'Gabigol',
        'age' => 26,
        'employed' => true
        ]
];

foreach ($users as $key => $value) {
    echo $key . " " . $value['name'] . PHP_EOL;
}


$user = new stdClass;

$user->name = "Victor";
$user -> age = 19;

foreach($user as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
}


$names = ['Victor', 'Arrasca', 'Gabigol', 'Silvia', 'Gaspar'];

foreach($names as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
}



?>