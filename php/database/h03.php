<?php

// lisame andmebaasitöötluse funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serceri konfiguratsiooni
require_once 'config.php';
// lisan väljundi kasutamise faili
require_once 'valjund.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
//otsingu vorm
otsinguVorm();
// kasutame vormi kaudu tulnud andmeid
if(isset($_GET['otsi'])){
    $otsi = $_GET['otsi']; // salvestame otsingu andmed
    // koostame antud andmete otsingu päringu
    $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
    // saadame päringu andmebaasi
    $result = getData($sql, $ikt);
    // kui andmed on olemas
    if($result !== false){
        // väljastame andmed
        $pealkirjad = array('2015', 'Kool');
        tabel($result, $pealkirjad);
    }
}   else {
    echo 'Täpsusta otsingut <br>';
}