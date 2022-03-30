<?php 

include('koneksi.php');

$nik = htmlspecialchars($_POST['nik']);
$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);

$query = "INSERT INTO user VALUES('', '$nik', '$nama_lengkap')";
$execute = mysqli_query($koneksi, $query);

if($execute)
{
    echo "<script>alert('Register Berhasil Silakan Login')</script>";
}else
{
    echo "<script>alert('Register Gagal Silakan Coba Lagi')</script>";
    header('Location: register.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='pesawat3.png' rel='shortcut icon'>
</head>