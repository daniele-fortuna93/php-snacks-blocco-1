<?php
// Creiamo un array 'matches' contenente altri array i
// quali rappresentano delle partite di basket di
// un’ipotetica tappa del calendario. Ogni array della
// partita avrà una squadra di casa e una squadra
// ospite, punti fatti dalla squadra di casa e punti fatti
// dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo
// schema:
// Olimpia Milano - Cantù | 55 - 60

$matches = [
    [
        'squadraCasa' => 'Olimpia Milano',
        'squadraOspite' => 'Trieste',
        'punteggioCasa' => 87,
        'punteggioOspite' => 90,
    ],
    [
        'squadraCasa' => 'Roma',
        'squadraOspite' => 'Treviso',
        'punteggioCasa' => 49,
        'punteggioOspite' => 75,
    ],
    [
        'squadraCasa' => 'Cantù',
        'squadraOspite' => 'Bologna',
        'punteggioCasa' => 100,
        'punteggioOspite' => 78,
    ],
    [
        'squadraCasa' => 'Cremona',
        'squadraOspite' => 'Brescia',
        'punteggioCasa' => 80,
        'punteggioOspite' => 88,
    ],
];

foreach($matches as $match){
    echo "{$match['squadraCasa']} - {$match['squadraOspite']} | {$match['punteggioCasa']} - {$match['punteggioOspite']}<br>";
}

?>