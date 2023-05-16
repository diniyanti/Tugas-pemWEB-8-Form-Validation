<?php
session_start();
include 'koneksi.php';

// Melakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_daftar");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama_ayah = $_POST['nama_ayah'];
    $thn_lahir_ay = $_POST['thn_lahir_ay'];
    $pendidikan_ay = $_POST['pendidikan_ay'];
    $pekerjaan_ay = $_POST['pekerjaan_ay'];
    $penghasilan_ay = $_POST['penghasilan_ay'];
    $kebutuhan_khusus_ay = $_POST['kebutuhan_khusus_ay'];
    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO  tbl_ayah (nama_ayah, thn_lahir_ay, pendidikan_ay, pekerjaan_ay, penghasilan_ay, kebutuhan_khusus_ay ) VALUES ('$nama_ayah', '$thn_lahir_ay', '$pendidikan_ay', '$pekerjaan_ay', '$penghasilan_ay', '$kebutuhan_khusus_ay')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";
        // Mengarahkan ke halaman selanjutnya setelah 3 detik
            header("refresh:3; url=ibu.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
