<!DOCTYPE html>
<html>
<body>

<?php
$tahun = 2014;
if ($tahun % 4 == 0 ) {
    if ($tahun % 100 == 0){
        if ($tahun %400 ==0){
            echo " Tahun kabiset";
        } else {
            echo "Bukan tahun kabiset";
        }
    } else {
        echo "Tahun kabiset";
    }
} else {
    echo "Bukan tahun kabiset";
}

?> 
</body>
</html> 