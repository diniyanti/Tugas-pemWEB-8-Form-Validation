<?php
session_start();
include 'koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "db_daftar");
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// Proses simpan data ke dalam tabel "registrasi"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_pendaftaran = $_POST["jenis_pendaftaran"];
    $tgl_masuk_sekolah = $_POST["tgl_masuk_sekolah"];
    $nis = $_POST["nis"];
    $no_ujian = $_POST["no_ujian"];
    $paud = $_POST["paud"];
    $tk = $_POST["tk"];
    $no_skhun = $_POST["no_skhun"];
    $no_ijazah = $_POST["no_ijazah"];
    $hobi = $_POST["hobi"];
    $citacita = $_POST["citacita"];
    // Query untuk menyimpan data ke dalam tabel
    $query = "INSERT INTO tbl_registrasi (jenis_pendaftaran, tgl_masuk_sekolah, nis, no_ujian, paud, tk, no_skhun, no_ijazah, hobi, citacita)
              VALUES ('$jenis_pendaftaran', '$tgl_masuk_sekolah', '$nis', '$no_ujian', '$paud', '$tk', '$no_skhun', '$no_ijazah', '$hobi', '$citacita')";
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika simpan data berhasil, bisa tambahkan tindakan atau pesan yang diinginkan
        echo "Data berhasil disimpan.";
        // Mengarahkan ke halaman selanjutnya setelah 3 detik
        header("refresh:1; url=pribadi.php");
    } else {
        // Jika simpan data gagal, bisa tambahkan tindakan atau pesan yang diinginkan
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
    }
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
