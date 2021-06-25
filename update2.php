<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_daftar'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST["tanggal_lahir"];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$telepon = $_POST['telepon'];
$asal_sekolah = $_POST['sekolah_asal'];
$alamat_sekolah = $_POST['alamat_sekolah'];
$total_un = $_POST['total_un'];
$nama_bpk = $_POST['nama_bpk'];
$pendidikan_bpk = $_POST['pendidikan_bpk'];
$pekerjaan_bpk = $_POST['pekerjaan_bpk'];
$penghasilan_bpk = $_POST['penghasilan_bpk'];
$nama_ibu = $_POST['nama_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$email = $_POST['email'];
$password = $_POST['password'];
$tanggal_daftar = $_POST['tanggal_daftar'];
mysqli_query($connect, "UPDATE tb_siswa SET 
            nama='$nama', 
            tempat_lahir='$tempat_lahir', 
            tanggal_lahir='$tanggal_lahir',
            alamat='$alamat',
            jk='$jk',
            agama='$agama',
            telepon='$telepon',
            sekolah_asal='$asal_sekolah',
            alamat_sekolah='$alamat_sekolah',
            total_un='$total_un',
            nama_bpk='$nama_bpk',
            pendidikan_bpk='$pendidikan_bpk',
            pekerjaan_bpk='$pekerjaan_bpk',
            penghasilan_bpk='$penghasilan_bpk',
            nama_ibu='$nama_ibu',
            pendidikan_ibu='$pendidikan_ibu',
            pekerjaan_ibu='$pekerjaan_ibu',
            penghasilan_ibu='$penghasilan_ibu',
            email='$email',
            password='$password',
            tanggal_daftar='$tanggal_daftar'
            WHERE id_daftar='$id'");

// mengalihkan halaman kembali ke index.php
if (mysqli_affected_rows($connect) > 0) {
    echo "<script type='text/javascript'>alert('Berhasil Di Update');</script>";
    echo "<script type='text/javascript'>window.location='hal_admin.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Gagal Di Update');</script>";
    echo "<script type='text/javascript'>window.location='hal_admin.php';</script>";
}
