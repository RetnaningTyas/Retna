<?php
//include file koneksi ke database
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";

//mengambil nilai dari form_pendaftaran
$nama = $_POST["nama"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$alamat_lengkap = $_POST["alamat"];
$jk = $_POST["jk"];
$agama = $_POST["agama"];
$telpon = $_POST["telepon"];
$sekolah_asal = $_POST["sekolah_asal"];
$alamat_sekolah = $_POST["alamat_sekolah"];
$total_un = $_POST["total_un"];
$nama_bpk = $_POST["nama_bpk"];
$pendidikan_bpk = $_POST["pendidikan_bpk"];
$pekerjaan_bpk = $_POST["pekerjaan_bpk"];
$penghasilan_bpk = $_POST["penghasilan_bpk"];
$nama_ibu = $_POST["nama_ibu"];
$pendidikan_ibu = $_POST["pendidikan_ibu"];
$pekerjaan_ibu = $_POST["pekerjaan_ibu"];
$penghasilan_ibu = $_POST["penghasilan_ibu"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$tanggal_daftar = $_POST["tanggal_daftar"];


//input data ke tabel pendaftaran
$input_data = "INSERT INTO tb_siswa VALUES (' ', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat_lengkap',
'$jk', '$agama',  '$telpon', '$sekolah_asal', '$alamat_sekolah', '$total_un', '$nama_bpk', '$pendidikan_bpk',
'$pekerjaan_bpk', '$penghasilan_bpk', '$nama_ibu', '$pendidikan_ibu', '$pekerjaan_ibu',
'$penghasilan_ibu', '$email', '$password', '$tanggal_daftar')";

//menjalankan query diatas
$hasil = mysqli_query($connect, $input_data);
if(!$hasil){
    echo "<script>alert('Data Gagal di Tambahkan!');history.go(-2);</script>";
} else{
    echo "<script>alert('Data Berhasil di Tambahkan!');history.go(-2);</script>";
}
?>