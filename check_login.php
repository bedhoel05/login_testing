<?php
session_start(); 

include("koneksi.php"); 

    $username = $_POST['username']; 
    $password = $_POST['password']; 

    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'"; 

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) { 

        $_SESSION['username'] = $username; 
        //  header("Location: welcome.php"); 
        if (isset($_SESSION['username'])) {
 
            echo "Nama pengguna: " . $_SESSION['username'];
            header('Location: dashboard.php?username=$username');
         
        } else {
         
            echo "Tidak ada pengguna yang login.";
         
        }
        // echo "Login Berhasil"; 
        // exit;
    } else {
        echo "Login gagal. <a href='index.php'>Coba lagi</a>"; 
    } 
$conn->close();
?>