<?php

$nimi = $_GET['nimi'];
$nimi = strtolower($nimi);
$nimi = ucfirst($nimi);
echo 'Tere, '.$nimi. '!';
echo '<hr>';

$sisend = $_GET['sisend'];
for ($indeks = 0; $indeks < strlen($sisend); $indeks++) {
    $symbol = strtoupper($sisend[$indeks]);
    echo $symbol . '.';
}
echo '<hr>';

$roppSonad = array('noob', 'kurat');
$lause = $_GET['lause'];
$lause = strtolower($lause);

foreach ($roppSonad as $roppSona) {
    $asendus = '';
}
$roppSonaIndex = strpos($lause, $roppSona, 0);

if ($roppSonaIndex !== false) {
    $lause = substr_replace($lause, $asendus, $roppSonaIndex, strlen($roppSona));
}

$lause = ucfirst($lause);

echo $lause;
echo '<hr>';