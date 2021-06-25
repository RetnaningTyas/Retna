<?php
include 'koneksi.php';
//ambil data
$id = $_GET['id_daftar'];
$edit_data = mysqli_query($connect, "SELECT * FROM tb_siswa WHERE id_daftar = $id");
while ($edit = mysqli_fetch_assoc($edit_data)) {
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
                <h2>Update Data Siswa Baru Tahun Ajaran 2021/2022</h2>
                <form action="update2.php" method="post">
                    <input type="hidden" value="<?php echo $edit['id_daftar']; ?>" name="id_daftar">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="<?= $edit["nama"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required value="<?= $edit["tempat_lahir"]; ?>">
                    </div>
                    <div class="form-group">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required value="<?= $edit["tanggal_lahir"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" rows="7" placeholder="Masukkan Alamat Lengkap" required><?= $edit["alamat"]; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>`Jenis Kelamin</label>
                        <input type="radio" name="jk" class="form-control" value="Laki-Laki" required>Laki-Laki
                        <input type="radio" name="jk" class="form-control" value="Perempuan" required>Perempuan
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="input-control" required>
                            <option value="<?= $edit["agama"]; ?>"><?= $edit["agama"]; ?></option>
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
                        <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon/HP" required value="<?= $edit["telepon"]; ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" name="sekolah_asal" class="form-control" placeholder="Asal Sekolah" required value="<?= $edit["sekolah_asal"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat Sekolah</label>
                        <textarea name="alamat_sekolah" class="form-control" rows="7" placeholder="Masukkan Alamat Lengkap Asal Sekolah" required><?= $edit["alamat_sekolah"]; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Total Nilai Ujian Nasional</label>
                        <input type="text" name="total_un" class="form-control" placeholder="Total Nilai Ujian Nasional" required value="<?= $edit["total_un"]; ?>">
                    </div>
                    <hr>

                    <div class="form-group">
                        <label>Nama Bapak</label>
                        <input type="text" name="nama_bpk" class="form-control" placeholder="Nama Bapak" required value="<?= $edit["nama_bpk"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <select name="pendidikan_bpk" class="form-control" required>
                            <option name="pendidikan_bpk" value="<?= $edit["pendidikan_bpk"]; ?>"><?= $edit["pendidikan_bpk"]; ?></option>
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
                        <input type="text" name="pekerjaan_bpk" class="form-control" placeholder="Pekerjaan Bapak" required value="<?= $edit["pekerjaan_bpk"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Bapak</label>
                        <select name="penghasilan_bpk" class="form-control" required>
                            <option name="penghasilan_bpk" value="<?= $edit["penghasilan_bpk"]; ?>"><?= $edit["penghasilan_bpk"]; ?></option>
                            <option name="penghasilan_bpk" value="<1 Juta">
                                < Rp.1.000.000</option>
                            <option name="penghasilan_bpk" value="1-3 Juta">Rp.1.000.000-Rp.3.000.000</option>
                            <option name="penghasilan_bpk" value="3-5 Juta">Rp.3.000.000-Rp.5.000.000</option>
                            <option name="penghasilan_bpk" value=">5 Juta">> Rp.5.000.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required value="<?= $edit["nama_ibu"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <select name="pendidikan_ibu" class="form-control" required>
                            <option name="pendidikan_ibu" value="<?= $edit["pendidikan_ibu"]; ?>"><?= $edit["pendidikan_ibu"]; ?></option>
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
                        <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" required value="<?= $edit["pekerjaan_ibu"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Penghasilan Ibu</label>
                        <select name="penghasilan_ibu" class="form-control" required>
                            <option name="penghasilan_bpk" value="<?= $edit["penghasilan_ibu"]; ?>"><?= $edit["penghasilan_ibu"]; ?></option>
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
                        <input type="date" name="tanggal_daftar" class="form-control" placeholder="Tanggal Pendaftaran" required value="<?= $edit["tanggal_daftar"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required value="<?= $edit["email"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required value="<?= $edit["pw"]; ?>">
                    </div>
                    <hr>

                    <div class="checkbox">
                        <input type="checkbox" required> Dengan ini saya menyatakan bahwa data yang saya masukkan adalah benar
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                <?php } ?>
                </form>

            </div>
            <footer class="container-fluid">
                <p class="text-center">&copy 2021<a href="#"> </a></p>
                <p class="text-center kecil">Seleksi Pendaftaran Siswa Baru Online </p>
            </footer>

    </body>

    </html>