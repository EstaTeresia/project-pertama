<!DOCTYPE html>
<html>
<body>

<?php
$alas = 6;
$tinggi = 8;

$luas = 0.5 * $alas * $tinggi;
echo "Luas segitiga : $luas<br>";

$sisi= 4;
$keliling = $sisi + $sisi + $sisi;
echo "Keliling segitiga : $keliling <br>";

$alas = 8;
$sisimiring = 8;

$tinggisegitiga = sqrt ($sisimiring **2 - (0.5 * $alas)**2);
$hasil = round ($tinggisegitiga, 2);
echo "Tinggi segitiga : $hasil <br>";
?>  

</body>
</html>
