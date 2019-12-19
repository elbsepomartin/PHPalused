<?php

// sisselogimise vorm
function loginVorm(){
    echo '
        <form method="post" action="">
        Kasutajanimi: <input type="text" name="nimi"><br>
        Parool: <input type="password" name="parool"><br>
        <input type="submit" value="Logi sisse">
        </form>
    ';
}