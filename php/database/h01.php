<?php


// lisame andmebaasitöötluse funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serceri konfiguratsiooni
require_once 'config.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
// vaatame andmeid
$sql = 'SELECT * FROM koolid2015';
$result = query($sql, $ikt);
echo '<pre>';
print_r($result);