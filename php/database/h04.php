<?php

// lisame andmebaasitöötluse funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serceri konfiguratsiooni
require_once 'config.php';
// lisan väljundi kasutamise faili
require_once 'valjund.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// andmete sisestamise päring
$sql = 'INSERT INTO kliendid SET '.
    ' enimi="Karu", '.
    ' pnimi="Poeg", '.
    'kontakt="karu.poeg@puhh.com"';
// salvestame andmed andmebaasi
$result = query($sql, $ikt);
if($result){
    echo 'Andmebaasi on lisatud '.mysqli_affected_rows($ikt).' ridu<br>';
    echo 'Viimane muudetud ID on '.mysqli_insert_id($ikt).'<br>';
}