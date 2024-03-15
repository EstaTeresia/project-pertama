<!DOCTYPE html>
<html>
<body>

<?php
$produk = [
    'Kaos' => 10000,
    'Celana' => 20000,
    'Topi' => 50000
];
$keranjang = [
    'Kaos' => 2,
    'Celana' => 1,
    'Topi' => 3

];
$total = 0;
foreach ($keranjang as $item => $qty) {
    if (isset($produk[$item])) {
        $total += $produk [$item] * $qty;
    }
}
 echo "Total belanja: Rp. " . number_format($total, 0, '.', '.');
?> 
</body>
</html> 