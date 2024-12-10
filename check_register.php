<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nik = $_POST['nik'];
    $wa = $_POST['wa'];

    include_once("koneksi.php");
    $result = mysqli_query($conn, "INSERT INTO akun(username,password,nik,wa) VALUES('$username','$password','$nik','$wa')");
    echo "Registrasi berhasil. Selamat datang, ";
    header('Location: index.php');
    exit;
    
}else{
    echo "Registrasi gagal";
}
?>