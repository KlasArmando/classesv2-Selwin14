<?php
class Auto
{
    public $prijs;
    public $serienummer;
    public $bouwjaar;
    public $type;
}
$auto1 = new Auto();
$auto1->serienummer = 3464353;
$auto1->prijs = 3060;
$auto1->bouwjaar = 2000;
$auto1->type = 'a klasse';


var_dump($auto1);

class Autobedrijf
{
    public $eigenaar;
    public $auto;
    public $klanten;
    public $medewerkers;
}
$autobedrijf1 = new Autobedrijf();
$autobedrijf1 ->Eigenaar = 'Selwin';
$autobedrijf1 ->auto = 40;
$autobedrijf1 ->klanten = 19;
$autobedrijf1 ->medewerkers = 'klaas en jan';

var_dump($autobedrijf1);

class Klanten
{
    public $naam;
    public $adres;
    public $nummer;
}
$klanten1 = new Klanten();
$klanten1->nummer = 06;
$klanten1->adres = willekeurig;


var_dump($klanten1);