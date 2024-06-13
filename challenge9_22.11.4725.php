<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Praktikum 9 Challenge</title>
</head>
<body>
<form action="action.php" method="GET">
Masukkan nama anda : <input type="text" name="nama" id=""><br>
Masukkan angka pertama (1-10): <input type="number" name="angka1" id=""><br>
Masukkan angka kedua (1-10): <input type="number" name="angka2" id=""><br>
<input type="submit" value="Hitung">
</form>
</body>

 -->
 <!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Aritmatika</title>
    <script type="text/javascript">
        function clearAndShowResult(result) {
            document.body.innerHTML = result;
        }
    </script>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari form
    $angkaPertama = $_POST['angkaPertama'];
    $angkaKedua = $_POST['angkaKedua'];
    $nama = $_POST['nama'];

    // Lakukan perhitungan
    $hasilTambah = $angkaPertama + $angkaKedua;
    $hasilKurang = $angkaPertama - $angkaKedua;
    $hasilKali = $angkaPertama * $angkaKedua;
    $hasilBagi = $angkaPertama / $angkaKedua;
    $hasilModulo = $angkaPertama % $angkaKedua;

    // Buat hasil dalam bentuk string
    $result = "Perhitungan Aritmatika<br>";
    $result .= "Nama : " . $nama . "<br>";
    $result .= "$angkaPertama + $angkaKedua = " . $hasilTambah . "<br>";
    $result .= "$angkaPertama - $angkaKedua = " . $hasilKurang . "<br>";
    $result .= "$angkaPertama * $angkaKedua = " . $hasilKali . "<br>";
    $result .= "$angkaPertama / $angkaKedua = " . $hasilBagi . "<br>";
    $result .= "$angkaPertama % $angkaKedua = " . $hasilModulo . "<br>";

    // Output JavaScript untuk membersihkan halaman dan menampilkan hasil
    echo "<script type='text/javascript'>clearAndShowResult(" . json_encode($result) . ");</script>";
    exit();
}
?>

<!-- Form HTML -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Masukkan nama anda: <input type="text" name="nama"><br>
    Masukkan angka pertama (1-10): <input type="number" name="angkaPertama"><br>
    Masukkan angka kedua (1-10): <input type="number" name="angkaKedua"><br>
    <input type="submit" name="hitung" value="Hitung">
</form>
</body>
</html>
