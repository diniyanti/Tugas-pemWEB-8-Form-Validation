<html>
<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="logout.php">Logout</a>
</nav>
    <h1 class="text-center">Data Peserta</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="logout.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Jenis Pendaftaran</th>
                            <th>Tanggal Masuk Sekolah</th>
                            <th>NIS</th>
                            <th>Nomor Peserta Ujian</th>
                            <th>Apakah Pernah PAUD</th>
                            <th>Apakah Pernah TK</th>
                            <th>No. Seri SKHUN Sebelumnya</th>
                            <th>No. Seri Ijazah Sebelumnya</th>
                            <th>Hobi</th>
                            <th>Cita-cita</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $registrasi = mysqli_query($conn, "SELECT * FROM tbl_registrasi");
                    foreach ($registrasi as $row) {           
                echo "<tr>
                    <td>" . $row['jenis_pendaftaran'] . "</td>
                    <td>" . $row['tgl_masuk_sekolah'] . "</td>
                    <td>" . $row['nis'] . "</td>
                    <td>" . $row['no_ujian'] . "</td>
                    <td>" . $row['paud'] . "</td>
                    <td>" . $row['tk'] . "</td>
                    <td>" . $row['no_skhun'] . "</td>
                    <td>" . $row['no_ijazah'] . "</td>
                    <td>" . $row['hobi'] . "</td>
                    <td>" . $row['citacita'] . "</td>
                <tr>";                      
                    }
                    ?>
                    </table>
                </div>
        </div>
        <div class="card-header bg-primary text-white">
            DATA PRIBADI
        </div>
        <div class="card-body">
            <form method="post" action="logout.php">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Berkebutuhan Khusus</th>
                            <th>Alamat Jalan</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Nama Dusun</th>
                            <th>Nama Kelurahan/Desa</th>
                            <th>Kecamatan</th>
                            <th>Kode Pos</th>
                            <th>Tempat Tinggal</th>
                        </tr>
                        <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM tbl_pribadi");
                    foreach ($datapribadi as $row) {
           

                echo "<tr>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['jenis_kelamin'] . "</td>
                    <td>" . $row['nisn'] . "</td>
                    <td>" . $row['nik'] . "</td>
                    <td>" . $row['tempat_lahir'] . "</td>
                    <td>" . $row['tgl_lahir'] . "</td>
                    <td>" . $row['agama'] . "</td>
                    <td>" . $row['kebutuhan_khusus'] . "</td>
                    <td>" . $row['alamat_jln'] . "</td>
                    <td>" . $row['rt'] . "</td>
                    <td>" . $row['rw'] . "</td>
                    <td>" . $row['dusun'] . "</td>
                    <td>" . $row['desa'] . "</td>
                    <td>" . $row['kecamatan'] . "</td>
                    <td>" . $row['kode_pos'] . "</td>
                    <td>" . $row['tempat_tinggal'] . "</td>
                <tr>";
                    }
                    ?>
                    </table>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Moda Transportasi</th>
                    <th>Nomor HP</th>
                    <th>Nomor Telepon</th>
                    <th>E-mail Pribadi</th>
                    <th>Penerima KPS/PKH/KIP</th>
                    <th>No.KPS/KK/PKH/KIP</th>
                    <th>Kewarganegaraan</th>
                    <th>Nama Negara</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $datapribadi = mysqli_query($conn, "SELECT * FROM tbl_pribadi");
                    foreach ($datapribadi as $row) {
                            echo "<tr>
                <td>" . $row['transportasi'] . "</td>
                    <td>" . $row['nohp'] . "</td>
                    <td>" . $row['notlp'] . "</td>
                     <td>" . $row['email'] . "</td>
                    <td>" . $row['penerima_kip'] . "</td>
                    <td>" . $row['no_kip'] . "</td>
                  <td>" . $row['kewarganegaraan'] . "</td>
                   <td>" . $row['negara'] . "</td>
                <tr>";                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA AYAH KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ayah Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ayahkandung = mysqli_query($conn, "SELECT * FROM tbl_ayah");
                    foreach ($ayahkandung as $row) {          
                echo "<tr>
                    <td>" . $row['nama_ayah'] . "</td>
                    <td>" . $row['thn_lahir_ay'] . "</td>
                    <td>" . $row['pendidikan_ay'] . "</td>
                    <td>" . $row['pekerjaan_ay'] . "</td>
                    <td>" . $row['penghasilan_ay'] . "</td>
                    <td>" . $row['kebutuhan_khusus_ay'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA IBU KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $ibukandung = mysqli_query($conn, "SELECT * FROM tbl_ibu");
                    foreach ($ibukandung as $row) {
                echo "<tr>
                    <td>" . $row['nama_ibu'] . "</td>
                    <td>" . $row['thn_lahir_ib'] . "</td>
                    <td>" . $row['pendidikan_ib'] . "</td>
                    <td>" . $row['pekerjaan_ib'] . "</td>
                    <td>" . $row['penghasilan_ib'] . "</td>
                    <td>" . $row['kebutuhan_khusus_ib'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>

</body>

</html>