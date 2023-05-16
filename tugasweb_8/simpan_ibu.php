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
    $nama_ibu = $_POST['nama_ibu'];
    $thn_lahir_ib = $_POST['thn_lahir_ib'];
    $pendidikan_ib = $_POST['pendidikan_ib'];
    $pekerjaan_ib = $_POST['pekerjaan_ib'];
    $penghasilan_ib  = $_POST['penghasilan_ib'];
    $kebutuhan_khusus_ib = $_POST['kebutuhan_khusus_ib'];
    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO tbl_ibu (nama_ibu, thn_lahir_ib, pendidikan_ib, pekerjaan_ib, penghasilan_ib , kebutuhan_khusus_ib) VALUES ('$nama_ibu', '$thn_lahir_ib', '$pendidikan_ib', '$pekerjaan_ib', '$penghasilan_ib', '$kebutuhan_khusus_ib')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan.";
        header("refresh:1; url=hasil_data.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
