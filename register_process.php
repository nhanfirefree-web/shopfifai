<?php

include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql_check = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$sql_check);

if(mysqli_num_rows($result) > 0){

echo "Tài khoản đã tồn tại";

}else{

$sql = "INSERT INTO users(username,password)
VALUES('$username','$password')";

mysqli_query($conn,$sql);

echo "Đăng ký thành công";

header("Location:login.php");

}


?>