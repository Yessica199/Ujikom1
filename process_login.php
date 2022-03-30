<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_POST['submit'])) {
    $nik = htmlspecialchars($_POST['nik']);
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
 
    $sql = "SELECT * FROM user WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['nama_lengkap'];
        $_SESSION['nik'] = $row['nik'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='pesawat3.png' rel='shortcut icon'>
</head>