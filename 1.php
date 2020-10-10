<DOCTYPE html!>
<html>
    <head>
        <title>Menghitung Harga Barang</title>
    </head>
    <body>

    </body>
</html>
<?php
$barang="A";
$jumlah=11;
    switch($barang){
        case "A";
            if($jumlah>10){
                $harga=3000;
                $diskon=500 * $jumlah;   
            }else {$diskon=0;
            $harga=3000;}
        break;
        case "B";
            if($jumlah>10){
                $harga=3500;
                $diskon=($harga * $jumlah)-($harga * $jumlah *0.5);
            } else { $diskon=0;
            $harga=3500;
        }
        break;
        case "C";
            $harga=5000;
            $diskon=0;
        break;
    }
    echo "Barang =".$barang." Jumlah =".$jumlah."</br>";
    echo "Total = ".$total = $harga * $jumlah."</br>"; 
    echo "Potongan = ".$diskon."</br>";
    echo "Total yang harus di bayar = ".((int)$total-$diskon)."</br>";

?>