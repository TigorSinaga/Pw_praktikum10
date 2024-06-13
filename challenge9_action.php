<?php
$nama = $_POST['nama'];
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$modulus = $angka1 % $angka2;

echo "<h2> Perhitungan Aritmatika </h2><br>";
echo "Nama: Tigor Neilson Sinaga";
echo "$angka1 + $angka2 = $tambah;";
echo "<br>$angka1 - $angka2 = $kurang";
echo "<br>$angka1 * $angka2 = $perkalian";
echo "<br>$angka1 / $angka2 = $pembagian";
echo "<br>$angka1 % $angka2 = $modulus";

?>