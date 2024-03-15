<?php
$tahun = explode('-',$_POST['tahun']);

if ($tahun[0] % 4 == 0 ) {
    if ($tahun[0] % 100 == 0){
        if ($tahun[0] % 400 == 0){
            echo "$tahun[0] Tahun kabiset";
        } else {
            echo "Bukan tahun kabiset";
        }
    } else {
        echo "$tahun[0] Tahun kabiset";
    }
} else {
    echo "Bukan tahun kabiset";
}

?> 