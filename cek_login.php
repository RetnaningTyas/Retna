<?php
include "koneksi.php";

ob_start();
session_start();
$username    = $_POST['username'];
$password    = md5($_POST['password']);
$_SESSION['username'] = $username;
    
$sql = "SELECT * FROM tb_admin WHERE username='$username'";
$qry = mysql_query($sql);
$num = mysql_num_rows($qry);
$row = mysql_fetch_array($qry);

if ($num==0 OR $password!=$row['password']) {
?>
    <script language="JavaScript">
        alert('Username atau Password tidak sesuai !');
        document.location='form_admin.php';
    </script>
<?php
}
else {
    $_SESSION['login']=1;
    header("Location: hal_admin.php");
}
mysql_close($Open); //Tutup koneksi engine MySQL
?>
/*session_start(); // Start session nya
include "koneksi.php"; // Load file koneksi.php
$username = $_POST['username']; // Ambil value username yang dikirim dari form
$password =  md5($_POST["password"]); // Ambil value password yang dikirim dari form
// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
$sql = $pdo->prepare("SELECT * FROM tb_admin WHERE username=:a AND password=:b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute(); // Eksekusi querynya
$data = $sql->fetch(); // Ambil datanya dari hasil query tadi
// Cek apakah variabel $data ada datanya atau tidak
if( ! empty($data)){ // Jika tidak sama dengan empty (kosong)
  $_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
  $_SESSION['password'] = $data['password']; // Set session untuk nama (simpan nama di session)
  
  setcookie("message","delete",time()-1); // Kita delete cookie message
  
  header("location: welcome.php"); // Kita redirect ke halaman welcome.php
}else{ // Jika $data nya kosong
  // Buat sebuah cookie untuk menampung data pesan kesalahan
  setcookie("message", "Maaf, Username atau Password salah", time()+3600);
  
  header("location: form_admin.php"); // Redirect kembali ke halaman index.php
}*/
?>