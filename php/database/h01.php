<?php


// lisame andmebaasitöötluse funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serceri konfiguratsiooni
require_once 'config.php';
// lisan väljundi kasutamise faili
require_once 'valjund.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// katsetame sql
$sql = 'SELECT Kool,Kokku FROM koolid2015';
$result = getData($sql, $ikt);
$tabeliPealkirjad = array('Kool', '2015');
tabel($result, $tabeliPealkirjad);