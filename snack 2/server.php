<?php
$partite_basket = [
    [
        "squadra_ospite" => "Team A",
        "squadra_casa" => "Team B",
        "punti_ospite" => 85,
        "punti_casa" => 90
    ],
    [
        "squadra_ospite" => "Team C",
        "squadra_casa" => "Team D",
        "punti_ospite" => 78,
        "punti_casa" => 92
    ],
    [
        "squadra_ospite" => "Team E",
        "squadra_casa" => "Team F",
        "punti_ospite" => 88,
        "punti_casa" => 84
    ],
    [
        "squadra_ospite" => "Team G",
        "squadra_casa" => "Team H",
        "punti_ospite" => 76,
        "punti_casa" => 80
    ],
    [
        "squadra_ospite" => "Team I",
        "squadra_casa" => "Team J",
        "punti_ospite" => 95,
        "punti_casa" => 85
    ],
    [
        "squadra_ospite" => "Team K",
        "squadra_casa" => "Team L",
        "punti_ospite" => 89,
        "punti_casa" => 87
    ],
    [
        "squadra_ospite" => "Team M",
        "squadra_casa" => "Team N",
        "punti_ospite" => 82,
        "punti_casa" => 94
    ],
    [
        "squadra_ospite" => "Team O",
        "squadra_casa" => "Team P",
        "punti_ospite" => 91,
        "punti_casa" => 86
    ],
    [
        "squadra_ospite" => "Team Q",
        "squadra_casa" => "Team R",
        "punti_ospite" => 79,
        "punti_casa" => 81
    ],
    [
        "squadra_ospite" => "Team S",
        "squadra_casa" => "Team T",
        "punti_ospite" => 93,
        "punti_casa" => 88
    ]
];

foreach($partite_basket as $cur_partita){
    var_dump($cur_partita["squadra_casa"]. " - " . $cur_partita["squadra_ospite"] . " | " . $cur_partita["punti_casa"] . " - " . $cur_partita["punti_ospite"]);
}
?>