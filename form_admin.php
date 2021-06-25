<?PHP
include 'koneksi.php';

if(isset($_POST['login'])){

    $cek = mysqli_query($connect, "SELECT * FROM tb_admin
    WHERE username='".$_POST['username']."' AND password ='".MD5($_POST['password'])."'");

    if(mysqli_num_rows($cek)> 0){
        //echo 'akun ada';
        echo '<script>window.location="hal_admin.php"</script>';
    }else{ 
        //echo'akun tidak ada';
        echo '<script>alert("Username atau Password anda salah")</script>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB ONLINE</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <br/>
    <br/>
    <div class="box_admin">
    <center><h2>Login Admin</h2></center>
    <div class="login_admin">
    <br/>
    <form action="" class="box" method="post" onSubmit="return validasi()">
    <div>
        <td>Username</td>
        <td>:</td>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <td>Password </td>
        <td>:</td>
        <input type="password" name="password" class="form-control" required>
  
    </div>
    <div>
        <input type="submit" name="login" value="Login" class="btn_submit">
        </div>
    </form>
    </div>
    </body>
</html>