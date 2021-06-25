<?php
//koneksi database
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'psb_tugaspweb';

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die("error :" . mysqli_connect_error());
}
