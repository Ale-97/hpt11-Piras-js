<?php

/*
Traccia 1:
Crea una classe Company che abbia i seguenti attributi pubblici:

-  name: nome dell’azienda; 
-  location: stato in cui e' ubicata la sede dell’azienda;
-   tot_employees: numero di dipedenti assunti in quella sede (di default, 0);

Crea 5 istanze di 5 aziende diverse
Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;

Definisci un attributo statico avg_wage, con valore 1500


- Implementa un nuovo metodo che, per ogni oggetto Company istanziato, calcoli la spesa annuale e la stampi per ogni oggetto. 
- Implementa un nuovo metodo che e' in grado di calcolare di volta in volta tutti i totali, in relazione alle varie aziende create.
-  Implementa un metodo statico che permetta di stampare a terminale il totale assoluto di tutte le aziende messe insieme.

*/


class Company
{

    public $name;
    public $location;
    public $tot_employees = 0;
    public $annualCost;

    static $avg_wage = 1500;

    static $totalCostCompany = 0;

    public function __construct($name, $location, $tot_employees)
    {

        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->echoEmployees();
        $this->stampAnnualCost();
        $this->stampTotalCostCompany();
    }

    public function echoEmployees()
    {
        if ($this->tot_employees > 0) {

            echo "L’ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti\n";
        } else {
            echo "L’ufficio " . $this->name . " con sede in " . $this->location . " non ha dipendenti\n";
        }
    }

    public function stampAnnualCost()
    {
        $this->annualCost = $this->tot_employees * self::$avg_wage;
        echo "Il totale delle spese annuali di " . $this->name . " è di " . $this->annualCost . "\n";
    }

    public function stampTotalCostCompany()
    {
        self::$totalCostCompany += $this->annualCost;
        echo "Il totale delle spese di tutte le aziende è " . self::$totalCostCompany . "\n\n";
    }
};



$company = new Company("Gruppomega", "Italia", 200);
$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("Cosatec", "America", 1000);
$company3 = new Company("Bardys", "America", 0);
$company4 = new Company("Barilla", "Albania", 200);
$company5 = new Company("Levissima", "Australia", 200);

/*Traccia 2: (ripasso proprietà statiche)

Creare una classe Contatore con una proprietà statica valore e un metodo statico "azzera()" che reimposta il valore del contatore a 0.
*/

class Contatore
{
    static $valore = 0;
    public function __construct()
    {
        self::$valore++;
        echo self::$valore . "\n";
    }
    static function azzera()
    {
        self::$valore = 0;
        echo self::$valore . "\n";
    }
}

$contatore = new Contatore;
$contatore2 = new Contatore;
$contatore3 = new Contatore;
$contatore4 = new Contatore;
Contatore::azzera();
/*
Traccia 3:

Creare una classe "Matematica" con un metodo statico "moltiplica($numeri)" che restituisce il prodotto dei numeri passati come parametro.
Ripetere per altre operazioni matematiche, salvare il risultato in un attributo “risultato” e creare un metodo che permette di stampare in console questo risultato
*/

class Matematica
{
    static $result = 0;

    static function stampResult()
    {
        echo  self::$result ."\n";
    }

    static function somma($a, $b)
    {
        self::$result= $a + $b;
        self::stampResult();
    }
    static function sottrai($a, $b)
    {
        self::$result =$a - $b;
        self::stampResult();
    }
    static function moltiplica($a, $b)
    {
         self::$result= $a * $b;
         self::stampResult();
    }
    static function dividi($a, $b)
    {
         self::$result= $a / $b;
         self::stampResult();
    }

 
}



$somma = Matematica::somma(5,7);
$somma = Matematica::sottrai(5,7);
$somma = Matematica::moltiplica(5,7);
$somma = Matematica::dividi(5,7);