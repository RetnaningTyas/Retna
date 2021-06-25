<?php
include 'koneksi.php';
if (isset($POST['submit'])) {
    if ($submit_daftar) {
        echo '<script>window.location="form_pendaftaran.php"</script>';
    } else {
        echo '<script>window.location="hal_daftar.php"</script>';
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
   <form action="form_pendaftaran.php" method="post">
        <section class="box-title">
            <h2>Selamat Datang di Penerimaan Siswa Baru</h2>
        </section>
        <section class="bg-tabel">
            <form action="" method="post">
                <div class="img-tabel">
                    <table border="0" style="width: 500px;">
                        <tr>
                            <td><img alt="siswa" src="siswa2.png" width="140" height="140" </td>
                                <h2><input type="submit" name="submit_daftar" value="Daftar" class="btn_submit"></h2>
                        </tr>
                    </table>
                </div>
            </form>
        </section>
        <form action="form_admin.php" method="post">
        </section>
        <section class="bg-tabel">
            <form action="" method="post">
                <div class="img-tabel">
                    <table border="0" style="width: 500px;">
                        <tr>
                            <td><img alt="siswa" src="note.png" width="140" height="140" </td>
                                <h3> <input type="submit" name="submit" value="Admin" class="btn_submit"></h3>
                        </tr>
                    </table>
                </div>
            </form>
        </section>
</body>

</html>