<?PHP
include 'koneksi.php';
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$data_peserta = mysqli_query($connect, "SELECT * 
FROM tb_siswa");
$p = mysqli_fetch_object($data_peserta);
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
    <h2>Bukti Pendaftaran</h2>
    <table class="tabel_cetak" border="0">
    <tr>
            <td>ID Pendaftaran</td>
            <td>:</td>
            <td><?php echo $p->id_daftar ?></td>
        </tr>
        
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $p->nama ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $p->tempat_lahir . ', ' . $p->tanggal_lahir ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $p->alamat ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $p->jk ?></td>
        </tr>
        <tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $p->agama ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon/HP</td>
            <td>:</td>
            <td><?php echo $p->telepon ?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?php echo $p->sekolah_asal ?></td>
        </tr>
        <tr>
            <td>Alamat Sekolah</td>
            <td>:</td>
            <td><?php echo $p->alamat_sekolah ?></td>
        </tr>
        <tr>
            <td>Total Nilai UN</td>
            <td>:</td>
            <td><?php echo $p->total_un ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $p->email ?></td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td><?php echo $p->tanggal_daftar ?></td>
        </tr>
    </table>
    </div>
</body>


</html>