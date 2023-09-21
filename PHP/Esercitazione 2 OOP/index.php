<?php

/*
Traccia 1:
Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:

    +-|Continent 
    +-----------|Country 
    +--------------------|Region 
    +---------------------------|Province 
    +------------------------------------|City 
    +------------------------------------------|Street

Ogni classe avra' un attributo public del tipo:

    $nameContinent;
    $nameCountry; 
    $nameRegion; 
    $nameProvince; 
    $nameCity; 
    $nameStreet;

La prima classe genitore avra' la seguente struttura:

    class Continent {
      public $nameContinent; 
      public function __construct($continent) 
      { 
      $this->nameContinent = $continent; 
      } 
    }

Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: ad es. “Mi trovo in Europa, Italia, Puglia, Bari, Strada San Giorgio Martire 2D“
*/

class Continent
{
    public $nameContinent;
    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
};


class Country extends Continent
{
    public $nameCountry;
    public function __construct($continent, $Country)
    {
        parent::__construct($continent);
        $this->nameCountry = $Country;
    }
};
class Region extends Country
{
    public $nameRegion;
    public function __construct($continent, $Country, $region)
    {
        parent::__construct($continent, $Country);
        $this->nameRegion = $region;
    }
};
class Province extends Region
{
    public $nameProvince;
    public function __construct($continent, $Country, $region, $province)
    {
        parent::__construct($continent, $Country, $region);
        $this->nameProvince = $province;
    }
};
class City extends Province
{
    public $nameCity;
    public function __construct($continent, $Country, $region, $province, $city)
    {
        parent::__construct($continent, $Country, $region, $province);
        $this->nameCity = $city;
    }
};
class Street extends City
{
    public $nameStreet;
    public function __construct($continent, $Country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $Country, $region, $province, $city);
        $this->nameStreet = $street;
    }
};


class MyLocation extends Street
{
    public function __construct($continent, $Country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $Country, $region, $province, $city, $street);
    }
    public function getMyCurrentLocation()
    {
        echo "Mi trovo in " . $this->nameContinent . ", " . $this->nameCountry . ", " . $this->nameRegion . ", " . $this->nameCity . ", " . $this->nameStreet . "\n";
    }
};


$myLocation = new MyLocation("Europa", "Italia", "Puglia", "Bari", "Bari", "Strada San Giorgio Martire 2D");

$myLocation->getMyCurrentLocation();
/*

Traccia 2:
Partendo dal seguente schema:

![](https://paper-attachments.dropboxusercontent.com/s_0D5105C8A52D0026CA02900269577451EB2D4F5B5A26AFA1147F1CF62538DC7A_1695312900543_image.png)


crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste regole:

-  le classi non devono avere attributi; 
-  ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
-   non puoi realizzare metodi definiti public per stampare il risultato; 
-   l’unico metodo public ammesso e' il costrutture.

Visualizzare a terminale le caratteristiche di diversi animali, es:


    $magikarp = new Fish();
    //Nel terminale visaulizzerete: 
    Sono un animale Vertebrato 
    Sono un animale a Sangue Freddo 
    Splash!

Utilizzare tratti per aggiungere caratteristiche comuni a più specie presenti in rami diversi, ad es. uccelli e rettili sono ovipari, anfibi e pesci respirano sott’acqua
*/



class Vertebrates
{


    public function __construct()
    {
        $this->textVertebrates();
    }
    protected function textVertebrates()
    {
        echo "\nSono un animale Vertebrato\n";
    }
};

trait Ovipari{
    public function StampOvipari(){
        echo "Sono un animale Oviparo\n";
    }
}

trait Branchie{
    public function StampBranchie(){
        echo "Sono un animale che respira sott'acqua\n";
    }
}
//------------------------------------------------
class WarmBlooded extends Vertebrates
{

    public function __construct()
    {
        parent::__construct();
        $this->textWarmBlooded();
    }
    protected function textWarmBlooded()
    {
        echo "Sono un animale a Sangue Caldo\n";
    }
};

class Mammals extends WarmBlooded
{

    public function __construct()
    {
        parent::__construct();
        $this->textMammals();
    }
    protected function textMammals()
    {
        echo "Sono un Mammifero\n";
    }
};

class Birds extends WarmBlooded
{

    use Ovipari;

    public function __construct()
    {
        parent::__construct();
        $this->StampOvipari();
        $this->textBirds();
    }
    protected function textBirds()
    {
        echo "Sono un Uccello\n";
    }
};


//----------------------------------------------
class ColdBlooded extends Vertebrates
{

    public function __construct()
    {
        parent::__construct();
        $this->textColdBlooded();
    }
    protected function textColdBlooded()
    {
        echo "Sono un animale a Sangue Freddo\n";
    }
};

class Fish extends ColdBlooded
{
use Branchie;
    public function __construct()
    {
        parent::__construct();
        $this->StampBranchie();
        $this->textFish();
    }
    protected function textFish()
    {
        echo "Splash!\n";
    }
};
class Reptiles extends ColdBlooded
{
    
    use Ovipari;

    public function __construct()
    {
        parent::__construct();
        $this->StampOvipari();
        $this->textReptiles();
    }
    protected function textReptiles()
    {
        echo "Sono un Rettile\n";
    }
};
class Amphibians extends ColdBlooded
{
    use Branchie;

    public function __construct()
    {
        parent::__construct();
        $this->StampBranchie();
        $this->textAmphibians();
    }
    protected function textAmphibians()
    {
        echo "Sono un Anfibio\n";
    }
};



$magikarp = new Mammals();
$magikarp = new Birds();
$magikarp = new Fish();
$magikarp = new Reptiles();
$magikarp = new Amphibians();

/*
Traccia 3:
Dato il seguente codice di partenza:

    class Car { 
      private $num_telaio; 
    } 
    class Fiat extends Car { 
      protected $license; 
      protected $color; 
    }

Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' (private,public,protected) che ritieni piu' opportuno,
 estendi i metodi per stampare a terminale la seguente frase: "La mia macchina e' Opel, con targa ND 123 OJ e numero di Telaio 1234".
*/

class Car
{
    private $num_telaio;
    private $targa;
    protected function setTarga($value)
    {
        $this->targa = $value;
    }
    protected function setnumTelaio($value)
    {
        $this->num_telaio = $value;
    }
    protected function getTarga()
    {
        return $this->targa;
    }
    protected function getnumTelaio()
    {
        return $this->num_telaio;
    }
}

class Fiat extends Car
{
    protected $license;
    protected $color;
    public $model = "Fiat";

    public function __construct($num_telaio, $targa, $license, $color)
    {
        $this->setTarga($targa);
        $this->setnumTelaio($num_telaio);
        $this->license = $license;
        $this->color = $color;
    }
    public function stamp()
    {
        echo "La mia macchina e' " . $this->model . ", con targa " . $this->getTarga() . " e numero di Telaio " . $this->getnumTelaio() . "\n";
    }
}

class Opel extends Car
{
    protected $license;
    protected $color;
    public $model = "Opel";

    public function __construct($num_telaio, $targa, $license, $color)
    {
        $this->setTarga($targa);
        $this->setnumTelaio($num_telaio);
        $this->license = $license;
        $this->color = $color;
    }
    public function stamp()
    {
        echo "La mia macchina e' " . $this->model . ", con targa " . $this->getTarga() . " e numero di Telaio " . $this->getnumTelaio() . "\n";
    }
}


$fiat= new Fiat("1234","ND 123 OJ","di uccidere","rosso");

$fiat->stamp();