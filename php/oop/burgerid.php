<?php

// Loodan, et see lahenduskäik on sobilik, kuna ma ei kasutanud mõningaid funktsioone nagu koostaBurger.

// Burgeri detailid
// Toodete hinnad
$sai = 1.50;
$teraleib = 2.00;
$liha1 = 3.00;
$liha2 = 4.00;
$liha3 = 5.00;
// Lisandid
// Burger 1
$lisand1 = 0.20;
$lisand2 = 0.50;
$lisand3 = 0.35;
$lisand4 = 0.70;
// Burger 2
$lisand5 = 0.20;
$lisand6 = 0.20;
$lisand7 = 0.35;
$lisand8 = 0.50;
$lisand9 = 0.20;
$lisand10 = 0.25;
// Burger 3
$lisand11 = 2.00;
$lisand12 = 1.50;

// Lisandi nimed
$sai_nimi = "sai";
$teraleib_nimi = "teraleib";
$liha1_nimi = "sealihapihv";
$liha2_nimi = "sojapihv";
$liha3_nimi = "veisepihv";
// Burger 1
$lisand1_nimi = "hapukurk";
$lisand2_nimi = "muna";
$lisand3_nimi = "sibul";
$lisand4_nimi = "peekon";
// Burger 2
$lisand5_nimi = "mais";
$lisand6_nimi = "kikerherned";
$lisand7_nimi = "jalapeno";
$lisand8_nimi = "avokaado";
$lisand9_nimi = "porgand";
$lisand10_nimi = "salat";
// Burger 3
$lisand11_nimi = "friikartul";
$lisand12_nimi = "jook";

// Lisandite valikud
// Burger 1
$lisandi_valik_1 = "Teie valitud lisandid on " . $lisand2_nimi . " ja " . $lisand4_nimi . ".";
// Burger 2
$lisandi_valik_2 = "Teie valitud lisandid on " . $lisand6_nimi . ", " . $lisand8_nimi . " ja " . $lisand10_nimi . ".";
// Burger 3
$lisandi_valik_3 = "NB! Lisandid on automaatselt lisatud, tegemist on einega!";

// Burgeri konstruktsioon
// Burger 1
$burger = new Burger("Burger", ($kokku = $sai + $liha1 + $lisand2 + $lisand4 . "€"));
echo $burger->get_nimetus();
echo "<br>";
echo "Koostisosad: " . $sai_nimi . ", " . $liha1_nimi;
echo "<br>";
echo "Lisandid: "; echo $lisand1_nimi . ", " . $lisand2_nimi . ", " . $lisand3_nimi . ", " . $lisand4_nimi . ".";
echo "<br>";
echo $burger->get_hind();
echo "<br>";
echo $lisandi_valik_1;
echo "<hr>";

// Burger 2
$TervislikBurger = new TervislikBurger("Tervislik burger", ($kokku = $teraleib + $liha2 + $lisand6 + $lisand8 + $lisand10 . "€"));
echo $TervislikBurger->get_nimetus();
echo "<br>";
echo "Koostisosad: " . $teraleib_nimi . ", " . $liha2_nimi;
echo "<br>";
echo "Lisandid: "; echo $lisand5_nimi . ", " . $lisand6_nimi . ", " . $lisand7_nimi . ", " . $lisand8_nimi . ", " . $lisand9_nimi . ", " . $lisand10_nimi . ".";
echo "<br>";
echo $TervislikBurger->get_hind();
echo "<br>";
echo $lisandi_valik_2;
echo "<hr>";

// Burger 3
$LuxBurger = new LuxBurger("Lux burger (eine)", ($kokku = $sai + ($liha3 * 2) . "€"));
echo $LuxBurger->get_nimetus();
echo "<br>";
echo "Koostisosad: " . $sai_nimi . ", " . $liha3_nimi;
echo "<br>";
echo "Lisandid: "; echo $lisand11_nimi . ", " . $lisand12_nimi . ".";
echo "<br>";
echo $LuxBurger->get_hind();
echo "<br>";
echo $lisandi_valik_3;
echo "<hr>";


// Klassid
// Burger 1
class Burger {
    private $nimetus;
    private $hind;

    // Paneb nimetuse ja lõpphinna lisanditega kokku
    function __construct($nimetus, $hind){
        $this->nimetus = $nimetus;
        $this->hind = $hind;
    }

    // Võtab kindlalt kohalt hinna
    function get_hind(){
        return $this->hind;
    }

    // Võtab kindlalt kohalt nimetuse
    function get_nimetus(){
        return $this->nimetus;
    }
}


// Burger 2
class TervislikBurger {
    private $nimetus;
    private $hind;

    // Paneb nimetuse ja lõpphinna lisanditega kokku
    function __construct($nimetus, $hind){
        $this->nimetus = $nimetus;
        $this->hind = $hind;
    }

    // Võtab kindlalt kohalt hinna
    function get_hind(){
        return $this->hind;
    }

    // Võtab kindlalt kohalt nimetuse
    function get_nimetus(){
        return $this->nimetus;
    }
}


// Burger 3
class LuxBurger {
    private $hind;
    private $nimetus;

    // Paneb nimetuse ja lõpphinna lisanditega kokku
    function __construct($nimetus, $hind){
        $this->nimetus = $nimetus;
        $this->hind = $hind;
    }

    // Võtab kindlalt kohalt hinna
    function get_hind(){
        return $this->hind;
    }

    // Võtab kindlalt kohalt nimetuse
    function get_nimetus(){
        return $this->nimetus;
    }
}
?>