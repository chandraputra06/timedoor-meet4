<?php 
    $num = [6, 9, 13, 14, 30];
    $jumlah = 0;

    for ($i = 0; $i < count($num); $i++) { 
        $jumlah += $num[$i];
    }

    $rata = $jumlah/5;

    echo "Jumlah Semua Element Array : " . $jumlah;
    echo"<br>";
    echo"Nilai Rata-ratanya adalah : ". $rata;