<?php

// tabel pealkirjaga
function tabel($andmed, $pealkirjad){
    echo '<table>';
        echo '<thead>';
            echo '<tr>';
                foreach ($pealkirjad as $pealkiri){
                    echo '<td>'.$pealkiri.'</td>';
                }
            echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
            foreach ($andmed as $tabeliRida){
                echo '<tr>';
                foreach ($tabeliRida as $vaartus){
                        echo '<td>'.$vaartus.'</td>';
                    }
                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
}