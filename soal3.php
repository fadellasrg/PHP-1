<?php

function printSegitiga($n){
    $x = 1;
    if(is_int($n) === false){
        echo "Data harus berupa angka";
    }else{
        for($i=0; $i < $n; $i++){
            for ($j=0; $j < $n; $j++){
                if($i+$j <= $n-1){
                    echo $x.' ';
                    $x = $x + 1;
                }else{
                    echo ' ';
                }
            }
            $x = 1;
            echo "<br>";
        }
    }
}

printSegitiga(6)

?>