<?php
    include "koneksi.php";
    $hasil = mysqli_query($connect, "SELECT * FROM tb_siswa");
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
    <h1>Daftar Siswa</h2>
    <br></br>
    <td><a href="logout.php">Logout</a></td>
    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Telpon</th>
                <th>Asal Sekolah</th>
                <th>Alamat Sekolah</th>
                <th>Total Nilai UN</th>
                <th>Email</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($hasil as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="edit2.php?id_daftar=<?= $row["id_daftar"]; ?>">Edit</a>||
                    <a href="hapus.php?id_daftar=<?= $row["id_daftar"]; ?>" 
                    onclick=" return confirm('Apakah anda yakin akan menghapus data ini?');">Hapus</a>
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["tempat_lahir"]; ?>, <?=$row["tanggal_lahir"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["jk"]; ?></td>
                <td><?= $row["agama"]; ?></td>
                <td><?= $row["telepon"]; ?></td>
                <td><?= $row["sekolah_asal"]; ?></td>
                <td><?= $row["alamat_sekolah"]; ?></td>
                <td><?= $row["total_un"]; ?></td>
                <td><?= $row["email"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            
</table>
</body
</html>
