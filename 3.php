<?php 

function count_handshake($orang){
    $hasil = "";
    for($i = 0; $i < $orang; $i++){
        $hasil += $i;
    }
    return $hasil;
}

print(count_handshake(6));