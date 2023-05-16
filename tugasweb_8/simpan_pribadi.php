<?php
session_start();
include 'koneksi.php';
// Buat koneksi ke database (gunakan koneksi.php sesuai dengan pengaturan Anda)
$koneksi = mysqli_connect("localhost", "root", "", "db_daftar");
// Periksa koneksi
if ($koneksi ->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
// Tangkap data dari formulir
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$kebutuhan_khusus = $_POST['kebutuhan_khusus'];
$alamat_jln = $_POST['alamat_jln'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$transportasi = $_POST['transportasi'];
$nohp  = $_POST['nohp'];
$notlp  = $_POST['notlp'];
$email = $_POST['email'];
$penerima_kip = $_POST['penerima_kip'];
$no_kip = $_POST['no_kip'];
$kewarganegaraan= $_POST['kewarganegaraan'];
$negara = $_POST['negara'];

// Query untuk memasukkan data ke tabel "data_pribadi"
$sql = "INSERT INTO tbl_pribadi (nama, jenis_kelamin, nisn, nik, tempat_lahir, tgl_lahir, agama, kebutuhan_khusus, alamat_jln, rt, rw, dusun, desa, kecamatan, kode_pos, tempat_tinggal, transportasi, nohp, notlp, email, penerima_kip, no_kip, kewarganegaraan, negara)
        VALUES ('$nama', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tgl_lahir', '$agama', '$kebutuhan_khusus', '$alamat_jln', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$nohp', '$notlp', '$email', '$penerima_kip', '$no_kip', '$kewarganegaraan', '$negara')";

// Jalankan query untuk memasukkan data
if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    // Mengarahkan ke halaman selanjutnya setelah 3 detik
    header("refresh:1; url=ayah.php");
    exit(); // Memastikan tidak ada output tambahan sebelum redirect
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $koneksi->error;
}
$koneksi->close();
?>
