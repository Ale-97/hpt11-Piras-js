<?php

/*Traccia 1:

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

Es. 


    $users = [
        ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M']
    ]
*/

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Ilaria', 'surname' => 'Vinci', 'gender' => 'F'],
    ['name' => 'Francesca', 'surname' => 'Tornello', 'gender' => 'F'],
    ['name' => 'Alessio', 'surname' => 'Piras', 'gender' => 'M'],
    ['name' => 'Matteo', 'surname' => 'Gerano', 'gender' => ''],
    ['name' => 'Mauro', 'surname' => 'Troisi', 'gender' => 'M'],
    ['name' => 'Federica', 'surname' => 'Lecca', 'gender' => ''],
];

foreach ($users as $user) {
    if ($user["gender"] == "M") {
        echo "Buongiorno Sig. " . $user["name"] . " " . $user["surname"] . "\n";
    } elseif ($user["gender"] == "F") {
        echo "Buongiorno Sig.ra " . $user["name"] . " " . $user["surname"] . "\n";
    } else {
        echo "Buongiorno " . $user["name"] . " " . $user["surname"] . "\n";
    }
};

/*
Traccia 2: 
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
*/
$numbers = [2, 4, 9, 7, 12, 45, 86, 29, 7, 6, 3, 4, 6, 8];
$evenNumbers = [];

foreach ($numbers as $number) {
    if (!($number & 1)) { //È un'operazione AND bit per bit. Tutti i numeri dispari hanno LSB (bit meno significativo impostato su 1), i numeri pari - 0.
        array_push($evenNumbers, $number);
    }
}
echo array_sum($evenNumbers) / count($evenNumbers) . "\n";

/*
Traccia 3: 

- Scrivere un programma che stampi in console tutti i numeri da uno a cento.
- Se il numero è multiplo di 3 stampare “PHP” al posto del numero; 
- se multiplo di 5 stampare “JAVASCRIPT”;
- se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY"
*/

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY \n";
    } elseif ($i % 3 == 0) {
        echo "PHP \n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT \n";
    } else {
        echo $i . "\n";
    };
}


/*
Traccia 4:

- Creare una variabile $temperatura ed utilizzando if, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
- Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
- Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.
*/

$temperature = 20;
$checkTemperature = function ($temperatureInput) {
    if ($temperatureInput > 25) {
        return "fa molto caldo";
    } elseif ($temperatureInput >= 15) {
        return "fa caldo";
    } else {
        return "fa freddo";
    }
};
echo $checkTemperature($temperature) . "\n";
/*
Traccia 5:

- Integra il seguente array con la traccia precedente, stampando per ogni riga la stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”


    $temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];
*/

$towns = ["Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9,];

foreach ($towns as $key => $town) {
    echo "A " . $key . $checkTemperature($town) . " con " . $town . "°C\n";
};

/*
Traccia 6:

Popola un array con i numeri da 0 a 90, dove ogni decina di numeri deve appartenere ad un'array separato

Es. risultato

    $tombola = [ 
    [0,1,,2,3,4,5,6,7,8,9], [...] , [...], ... 
    ];

Fare il var_dump dell’array e verificare che sia stato popolato correttamente

HINT: utilizza due cicli for annidati
*/
$tombola = [];
for ($e = 0; $e <= 90; $e++) {
    if ($e == 0 || $e % 10 == 0) {
        array_push($tombola, [$e]);
    } elseif ($e < 10) {
        array_push($tombola[0], $e);
    } else {
        array_push($tombola[floor($e / 10)], $e);
    }
};
var_dump($tombola);
