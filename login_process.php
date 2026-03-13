<?php

session_start();
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$_SESSION['user'] = $username;

header("Location:index.php");

}else{

echo "Sai tài khoản hoặc mật khẩu";
header("Location:login.php");

}

?>