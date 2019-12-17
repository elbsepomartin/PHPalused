<?php

// lisame andmebaasitöötluse funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serceri konfiguratsiooni
require_once 'config.php';
// lisan väljundi kasutamise faili
require_once 'valjund.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// lehe väljund
echo '<h1>Harjutus 05</h1>';
// andmete sisestamise vorm
lisaAndmedVorm();
// kontrollime andmete olemasolu
if(isset($_GET['enimi']) && isset($_GET['pnimi'])){
    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $kontakt = $_GET['kontakt'];
    if(strlen($enimi) > 0 and strlen($pnimi) > 0 and strlen($kontakt) > 0){
        // siis lisame sisestatud andmed andmebaasi
        $sql = 'INSERT INTO kliendid SET '.
            'enimi="'.$enimi.'", '.
            'pnimi="'.$pnimi.'", '.
            'kontakt="'.$kontakt.'"';
        // salvestame andmed andmebaasi
        $result = query($sql, $ikt);
        if($result) {
            echo 'Andmebaasi on lisatud '.mysqli_affected_rows($ikt).' ridu<br>';
            echo 'Viimane muudetud id on '.mysqli_insert_id($ikt).'<br>';
            // küsi kõikide klientide andmed andmebaasist
            // ja väljasta tabeli kujul
        }
    }
}