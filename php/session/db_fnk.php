<?php

// ühenduse loomine
function connect($host, $user, $pass, $dbname){
    // ühendus andmebaasiga
    $link = mysqli_connect($host, $user, $pass, $dbname);
    // kui ühendust ei tekkinud
    if($link === false){
        echo 'Probleem andmebaasi ühendusega<br>';
        exit;
    }
    mysqli_set_charset($link, 'utf8');
    // olemasoleva ühenduse tagastame põhiprogrammile
    return $link;
}

// päringu saatmine
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem päringuga <b>'.$sql.'</b><br>';
        return false;
    }
    return $result;
}

function getData($sql, $link){
    $result = query($sql, $link);
    $data = array();
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }
    if(count($data) == 0){
        return false;
    }
    return $data;
}