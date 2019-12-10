<?php


// lisame andmebaasitöötluse funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serceri konfiguratsiooni
require_once 'config.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
// tabeli ümbernimetamine
$sql = 'RENAME TABLE `elbsepom_phpalused`.`TABLE 1` TO `elbsepom_phpalused`.`koolid2015`';
$result = query($sql, $ikt);