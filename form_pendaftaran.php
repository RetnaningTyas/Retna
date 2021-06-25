<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
   // $sql = mysqli_query($connect, "SELECT MAX(RIGHT(id_daftar, 5)) AS id_daftar FROM tb_siswa");
    //$d = mysqli_fetch_object($sql);
    //$generateid= 'P'.date('Y').sprintf("%05s", $d->id + 1);
    
    $insert = mysqli_query($connect, "INSERT INTO tb_siswa VALUES (
        '".$_POST['nama']."',
        '".$_POST['tempat_lahir']."',
        '".date('Y-m-d')."',
        '".$_POST['alamat']."',
        '".$_POST['jk']."',
        '".$_POST['agama']."',
        '".$_POST['telepon']."',
        '".$_POST['sekolah_asal']."',
        '".$_POST['alamat_sekolah']."',
        '".$_POST['total_un']."',
        '".$_POST['nama_bpk']."',
        '".$_POST['pendidikan_bpk']."',
        '".$_POST['pekerjaan_bpk']."',
        '".$_POST['penghasilan_bpk']."',
        '".$_POST['nama_ibu']."',
        '".$_POST['pendidikan_ibu']."',
        '".$_POST['pekerjaan_ibu']."',
        '".$_POST['penghasilan_ibu']."',
        '".$_POST['email']."',
        '".$_POST['password']."',
        '".date('Y-m-d')."'
      )");
      if($insert){
          echo 'oke';
      }else{
          echo 'error'.mysqli_error($connect);
      }
    }
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--Load file library jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Load file library Popper JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    .selector-for-some-widget {
        box-sizing: content-box;
    }
</style>

<body>
    <div class="jumbotron text-center">
        <div class="container">
            <h2>Form Pendaftaran Siswa Baru Tahun Ajaran 2021/2022</h2>
            <form action="simpan_pendaftaran.php" method="post">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required />
                </div>
                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                </div>
                <div class="form-group">
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required <div class="form-group">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control" rows="7" placeholder="Masukkan Alamat Lengkap" required></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="radio" name="jk" class="form-control" value="Laki-Laki" required>Laki-Laki
                    <input type="radio" name="jk" class="form-control" value="Perempuan" required>Perempuan
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="input-control" required>
                        <option value="">--Pilih--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No. Telepon/HP</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon/HP" required>
                </div>
                <hr>

                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" name="sekolah_asal" class="form-control" placeholder="Asal Sekolah" required>
                </div>
                <div class="form-group">
                    <label>Alamat Sekolah</label>
                    <textarea name="alamat_sekolah" class="form-control" rows="7" placeholder="Masukkan Alamat Lengkap Asal Sekolah" required></textarea>
                </div>
                <div class="form-group">
                    <label>Total Nilai Ujian Nasional</label>
                    <input type="text" name="total_un" class="form-control" placeholder="Total Nilai Ujian Nasional" required>
                </div>
                <hr>

                <div class="form-group">
                    <label>Nama Bapak</label>
                    <input type="text" name="nama_bpk" class="form-control" placeholder="Nama Bapak" required>
                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select name="pendidikan_bpk" class="form-control" required>
                        <option name="pendidikan_bpk" value="">--Pilih--</option>
                        <option name="pendidikan_bpk" value="SD">SD/Sederajat</option>
                        <option name="pendidikan_bpk" value="SMP">SMP/Sederajat</option>
                        <option name="pendidikan_bpk" value="SMA">SMA/Sederajat</option>
                        <option name="pendidikan_bpk" value="Diploma">Diploma</option>
                        <option name="pendidikan_bpk" value="S1">Sarjana/S1</option>
                        <option name="pendidikan_bpk" value="S2">Magister/S2</option>
                        <option name="pendidikan_bpk" value="S3">Doktor/S3</option>
                        <option name="pendidikan_bpk" value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Bapak</label>
                    <input type="text" name="pekerjaan_bpk" class="form-control" placeholder="Pekerjaan Bapak" required>
                </div>
                <div class="form-group">
                    <label>Penghasilan Bapak</label>
                    <select name="penghasilan_bpk" class="form-control" required>
                        <option name="penghasilan_bpk" value="">--Pilih--</option>
                        <option name="penghasilan_bpk" value="<1 Juta">
                            < Rp.1.000.000</option>
                        <option name="penghasilan_bpk" value="1-3 Juta">Rp.1.000.000-Rp.3.000.000</option>
                        <option name="penghasilan_bpk" value="3-5 Juta">Rp.3.000.000-Rp.5.000.000</option>
                        <option name="penghasilan_bpk" value=">5 Juta">> Rp.5.000.000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required>
                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select name="pendidikan_ibu" class="form-control" required>
                        <option name="pendidikan_ibu" value="">--Pilih--</option>
                        <option name="pendidikan_ibu" value="SD">SD/Sederajat</option>
                        <option name="pendidikan_ibu" value="SMP">SMP/Sederajat</option>
                        <option name="pendidikan_ibu" value="SMA">SMA/Sederajat</option>
                        <option name="pendidikan_ibu" value="Diploma">Diploma</option>
                        <option name="pendidikan_ibu" value="S1">Sarjana/S1</option>
                        <option name="pendidikan_ibu" value="S2">Magister/S2</option>
                        <option name="pendidikan_ibu" value="S3">Doktor/S3</option>
                        <option name="pendidikan_ibu" value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" required>
                </div>
                <div class="form-group">
                    <label>Penghasilan Ibu</label>
                    <select name="penghasilan_ibu" class="form-control" required>
                        <option name="penghasilan_bpk" value="">--Pilih--</option>
                        <option name="penghasilan_bpk" value="<1 Juta">
                            < Rp.1.000.000</option>
                        <option name="penghasilan_bpk" value="1-3 Juta">Rp.1.000.000-Rp.3.000.000</option>
                        <option name="penghasilan_bpk" value="3-5 Juta">Rp.3.000.000-Rp.5.000.000</option>
                        <option name="penghasilan_bpk" value=">5 Juta">> Rp.5.000.000</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label>Tanggal Pendaftaran</label>
                    <input type="date" name="tanggal_daftar" class="form-control" placeholder="Tanggal Pendaftaran" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                </div>
                <hr>

                <div class="checkbox">
                    <input type="checkbox" required> Dengan ini saya menyatakan bahwa data yang saya masukkan adalah benar
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
        <footer class="container-fluid">
            <p class="text-center">&copy 2021<a href="#"> </a></p>
            <p class="text-center kecil">Seleksi Pendaftaran Siswa Baru Online </p>
        </footer>

</body>

</html>