<?php

    $kalimat = "Programer";
    $a = strlen($kalimat);
    $vocal = 0;
    $jumlah = 0;

    for($i=0; $i<=$a-1; $i++){
        if($kalimat[$i]=='a'||$kalimat[$i]=='i'||$kalimat[$i]=='u'||$kalimat[$i]=='e'||$kalimat[$i]=='o'){
            
            $vocal = $vocal+1;

        }
        elseif($kalimat[$i]==''){
            $jumlah = $jumlah+1;
        }
        else{
            continue;
        }
    }
    $b = $a - $jumlah;
    echo "input : ".$kalimat."</br>";
    echo "Jumlah huruf vocal : ".$vocal."</br>";
    echo "Jumlah karakter : ".$b."</br>";


?>