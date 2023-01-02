<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqi_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
}else{
    header("location:index.php");
}
?>