<?php 
session_start();
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>FORMULIR PESERTA DIDIK</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style type="text/css">
     .warning {color : #FF0000;}
        .putih{
            background-color: black;
            color: white;
        }
        .tengah{
            width: 150%;
            margin-left: 180px;
            height: auto;
        }
     </style>
</head>
<body>
    <div class="tengah">
    <div class="row">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;">Formulir Peserta Didik</h1><br>
           <p>
               Tanggal : <?php echo date('d F Y'); ?>
           </p>
        </div>
        <div class="putih">Registrasi Peserta Didik</div>
        <div class="card-body">
            <form method="POST" action="simpan_registrasi.php" >
                <!-- Jenis Pendaftaran -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                    <div class="col-sm-10">
                        <select name="jenis_pendaftaran" class="form-control" required="">
                            <option selected disabled value="">-- Pilih --</option>
                            <option value="baru">Baru</option>
                            <option value="pindahan">Pindahan</option>
                        </select>
                    </div>
                </div>
                <!-- Tanggal Masuk Sekolah -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_masuk_sekolah" class="form-control" required="">
                    </div>
                </div>
                <!-- NIS -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                        <input type="number" name="nis" class="form-control"  placeholder="NIS" required="">
                    </div>
                </div>
                <!-- Nomor Peserta Ujian -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                    <div class="col-sm-10">
                        <input type="number" name="no_ujian" class="form-control" required="" placeholder="Nomor Peserta Ujian"> 
                        <span style="font-size: 11px; text-decoration-line: initial;">
                            <p>
                                <i>
                                    * Nomor Peserta Ujian adalah 20 Digit yang Tertera dalam Sertifikat 
                                    <i style="color: red; font-weight: bold;">SKHUN SD</i>
                                    , diisi bagi peserta didik jenjang SMP  
                                </i>
                            </p>
                        </span>
                    </div>
                </div>
                <!-- Paud -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                    <div class="col-sm-10">
                        <input type="radio" name="paud" value="Ya" required=""> Ya
                        <input type="radio" name="paud" value="Tidak" required=""> Tidak
                    </div>
                </div>
                <!-- TK -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                    <div class="col-sm-10">
                        <input type="radio" name="tk" value="Ya" required=""> Ya
                        <input type="radio" name="tk" value="Tidak" required=""> Tidak
                    </div>
                </div>
                <!-- No. seri SKHUN  -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                    <div class="col-sm-10">
                        <input type="number" name="no_skhun" class="form-control"  placeholder="No. Seri SKHUN" required=""> 
                        <span style="font-size: 11px; text-decoration-line: initial;">
                            <p>
                                <i>
                                    Diisi 16 digit yang tertera di
                                    <i style="color: red; font-weight: bold;">SKHUN SD</i>
                                    - diisi bagi peserta didik jenjang SMP  
                                </i>
                            </p>
                        </span>
                    </div>
                </div>
                <!-- No. seri IJAZAH  -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Seri IJAZAH Sebelumnya</label>
                    <div class="col-sm-10">
                        <input type="number" name="no_ijazah" class="form-control"  placeholder="No. Seri IJAZAH" required=""> 
                        <span style="font-size: 11px; text-decoration-line: initial;">
                            <p>
                                <i>
                                    Diisi 16 digit yang tertera di
                                    <i style="color: red; font-weight: bold;">IJAZAH SD</i>
                                    - diisi bagi peserta didik jenjang SMP  
                                </i>
                            </p>
                        </span>
                    </div>
                </div>
                <!-- Hobi -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hobi</label>
                    <div class="col-sm-10">
                        <select name="hobi" class="form-control" required="">
                            <option selected disabled value="">-- Pilih --</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Kesenian">Kesenian</option>
                            <option value="Membaca">Membaca</option>
                            <option value="Menulis">Menulis</option>
                            <option value="Travelin">Travelin</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <!-- Cita -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cita - Cita</label>
                    <div class="col-sm-10">
                        <select name="citacita" class="form-control" required="">
                            <option selected disabled value="">-- Pilih --</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" onclick="tampilkanPesan()" >Next</button>
                         <script>
        function tampilkanPesan() {
          var konfirmasi = confirm("Apakah Data yang Dimasukkan Sudah Benar?");
          if (konfirmasi) {
            alert("Data berhasil disimpan.");
          } else {
            alert("Silakan periksa kembali data Anda.");
          }
        }
        </script>
                    </div>
                </div>
            </form>
        </div>
                
    </div>
    </div>
    </div>
    </div>
</body>
</html>