<?php
function buatsegitiga($tinggi)
{
    for ($i = 1; $i <= $tinggi; $i++){
        for ($j = 10; $j >= $i ; $j--){
            echo"* ";
        }
        echo "<br>";
    }
}
buatsegitiga(10);