<?php

function grade($mtk, $bahasaIndonesia, $bahasaInggris, $ipa){

    $nilai = ($mtk + $bahasaIndonesia + $bahasaInggris + $ipa)/4;

    if(!$mtk || !$bahasaIndonesia || !$bahasaInggris || !$ipa){
        echo "Input semua nilai";
    }else if(is_int($mtk) !== true || is_int($bahasaIndonesia) !== true || is_int($bahasaInggris) !== true || is_int($ipa) !== true){
        echo "Nilai yang diinputkan harus berupa angka";
    }else if($nilai <= 100 && $nilai >= 90){
        echo "Rata-rata = $nilai <br>Grade = A";
    }else if($nilai >= 80){
        echo "Rata-rata = $nilai <br>Grade = B";
    }else if($nilai >= 70){
        echo "Rata-rata = $nilai <br>Grade = C"; 
    }else if($nilai >= 60){
        echo "Rata-rata = $nilai <br>Grade = D"; 
    }else{
        echo "Rata-rata = $nilai <br>Grade = E"; 
    }
}
grade(80, 90, 89, 69);

?>