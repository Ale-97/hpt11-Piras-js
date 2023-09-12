<?php

/*Definisci 4 variabili:
 Integer 
 Float 
 String 
 Boolean

A schermo, fai comparire il tipo di dato delle varie variabili.
*/
$integer=10;
$float=4.5;
$string="ciao";
$boolean=true;

var_dump($integer, $float, $string, $boolean);
 

/*
Traccia 2: 
Date le seguenti variabili:

$1text = "Marco"; 
“text2 = "hai"; 
$text.3 = "sete"; 
“text4 = "?"; 
“text5 = "Perchè";
“te-xt6 = '$text2';
$text 7 = 'bevuto';
“text8 = "tutto"

correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“
*/

$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".\n" ;

/*
Traccia 3: 
Dati i seguenti array:

$words1 = [ 'una', 67,'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo', [ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ];

$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];

Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: 

“Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

HINT: Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.
*/
//       /0/--0---- 1----2-------3------4------5---
$words1 = [ 'una', 67,'vita', 'colle', 'mi','rosso',

// /1/---0--------1-----2-
    [ 'oscura', 'era', 89, 

// /2/--0---
    [ 'mezzo', 

// /3/----0--------1-
    [ 'cammin', 'Nel',

// /4/----0-------1--
    [ 'selva', 'la', 

// /5/--0------1-----2-------------
    [ 'via', 'una', true, ] ], ] ],

// /1/----4--------5--  /0/--7------ 
    'ritrovai', 'per' ], 'diritta' ]; 

$firstArray1=$words1[6];
$secondArray1=$firstArray1[3];
$thirdArray1=$secondArray1[1];
$fourthArray1=$thirdArray1[2];
$fifthArray1=$fourthArray1[2];

$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];
$firstArray2=$words2["elemento3"];
//              nel                 mezzo                       cammin                  nostra                        vita              mi                  ritrovai                per
$result = $thirdArray1[1] ." " . $secondArray1[0] . " del ". $thirdArray1[0] . " di ". $words2["elemento2"] . " " . $words1[2] . " " . $words1[4] . " " . $firstArray1[4] . " " . $firstArray1[5]
//                  una                    selva                oscura                      che                     la                   diritta                via
        . " " . $words1[0] . " " .  $fourthArray1[0] . " " . $firstArray1[0] . ", " . $firstArray2[2] . " " . $fourthArray1[1] . " " . $words1[7] . " " . $fifthArray1[0]
//                  era                     smarrita
        . " " . $firstArray1[1]  . " " . $firstArray2[1] . ".\n"; 

        echo $result;



/*
Traccia 4
 Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = 10; ed utilizzando var_dump() per visualizzare l'esito dei seguenti confronti: 
 $x < $y [esempio: var_dump($x < $y); ] 
 $x <= $w 
 $y == $z 
 $y === $z 
 $y !== $z
 $y != $z
  
  cambiando anche a piacere le variabili per verificare il funzionamento dei diversi operatori di confronto
*/
$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x < $y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);

/*
  Traccia 5 (extra)
  
  Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”
  con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso
  
  Es.
  $corsoHackademy = [ "docenti" => ["daniele", "emanuele"], "studenti" => ["pippo", "franco", "coppola"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];
  
  Usate questo array per stampare in console una frase di presentazione a piacere:
  Es.
  “Sono pippo e sto studiando bootstrap con daniele”
*/


$corsoHackademy = [ "docenti" => ["Andera", "emanuele", "jeremy"], "studenti" => ["Alessio", "Angelo", "Francsco", "Fabio", "Sabrina"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];



echo "Sono " . $corsoHackademy["studenti"][0]  . " e sto studiando " . $corsoHackademy["argomenti"][4] . " con " . $corsoHackademy["docenti"][1];