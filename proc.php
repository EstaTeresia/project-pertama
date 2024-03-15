<?php

$temporaryFolder = $_FILES ['foto'] ['tmp_name'];
$target_dir = 'uploads/';
$target_file = $target_dir . basename ($_FILES ['foto']['name']);

move_uploaded_file($temporaryFolder, $target_file);

echo 'HALO' . $_POST ['nama_lengkap'] . '<br>';
echo 'ALAMAT KAMU'. $_POST ['Alamat'] . '<br>';
echo  '<img widht ="100px" src="/belajar_php_1/uploads/'. $_FILES['foto']['name'] . '">';
?>