 <?php
 include 'koneksi.php';
 $id = $_GET["id_daftar"];
 mysqli_query($connect, "DELETE FROM tb_siswa WHERE id_daftar = $id");
 return mysqli_affected_rows($connect);
/*
 if (mysqli_affected_rows($connect) > 0) {
    echo "<script type='text/javascript'>alert('Berhasil Di Hapus');</script>";
    echo "<script type='text/javascript'>window.location='hal_admin.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Gagal Di Hapus');</script>";
    echo "<script type='text/javascript'>window.location='hal_admin.php';</script>";
}

   

    if(hapus($id) > 0) {
        echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href = 'hal_admin.php';
        </script>";
    } else { 
        echo "
        <script>
        alert('data gagal dihapus!');
        document.location.href = 'hal_admin.php';
        </script>";
}*/
 ?>