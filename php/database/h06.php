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
echo '<h1>Harjutus 06</h1>';
// kustutamise päring
$sql = 'DELETE FROM kliendid WHERE id="2"';
$result = query($sql, $ikt);
if($result){
    echo 'Andmebaasist on kustutatud '.mysqli_affected_rows($ikt).' rida<br>';
}