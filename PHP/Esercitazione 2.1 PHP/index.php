<?php
function allarm($param, $outputText)
{ // questa funzione mi serve solo per stampare un messaggio nel caso non
    if (!$param) {                       // trovasse una corrispondenza 
        echo $outputText;
    }
};
//Ho messo tutto sotto una funzione così da poter controllare più password
function checkPassword($password)
{
    // Dichiaro delle variabili dove uso delle RegEx per controllare se nella mia password vengono rispettate delle condizione
    // Uso la "preg_match()" per cercare una corrispndenza nella stringa 
    $uppercase = preg_match('@[A-Z]@', $password); // Controlla se c'è almeno una lettera maiuscola
    $lowercase = preg_match('@[a-z]@', $password); // Controlla se c'è almeno una lettera minuscola
    $number    = preg_match('@[0-9]@', $password); // Controlla se c'è almeno un numero
    $specialChars = preg_match('@[^\w]@', $password);
    // Controlla se c'è almeno un simbolo(\w corrisponde a [a-z A-Z 0-9] invece ^ e come una negazione 
    //quindi deve trovare una corrispondenza che non faccia parte di una lettera maiuscola/minuscola e 
    //di un numero quindi rimangono solo i simboli )


    // questo if controlla se almeno uno dei parametri non viene rispettato 
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        allarm($uppercase, "Inserisci almeno una lettera maiuscola \n");
        allarm($lowercase, "Inserisci almeno una lettera minuscola \n");
        allarm($number, "Inserisci almeno un numero \n");
        allarm($specialChars, "Inserisci almeno un simbolo \n");
        allarm(strlen($password) >= 8, "Inserisci almeno 8 caratteri \n");
    } else {
        echo "La password è perfetta.\n";
    }
};

echo "\n1\n";
checkPassword("PASSWORD@1");
echo "\n2\n";
checkPassword("password@1");
echo "\n3\n";
checkPassword("Pass@1");
echo "\n4\n";
checkPassword("Password@");
echo "\n5\n";
checkPassword("Password1");
echo "\n6\n";
checkPassword("  ");
echo "\n7\n";
checkPassword("Password@1");