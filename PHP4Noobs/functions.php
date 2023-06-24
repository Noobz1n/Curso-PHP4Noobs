<?php 




function sendMessage(string $nickname, string $message) {
    echo "[" . date('Y-m-d H:i:d') . "] $nickname:" . strtoupper(" " . $message) . PHP_EOL;
}


sendMessage('Noobz1n', 'Salveeeeeee');
sendMessage('Arrascaeta', 'Salve mano, vamo jogar no mengao');



function calculoSoma(int $x, int $y) {
    $resultado = $x + $y;
    echo "A soma entre $x + $y = $resultado";
}

calculoSoma(5, 2);






?>