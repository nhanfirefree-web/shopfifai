<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập</title>
<link rel="stylesheet" href="css.css?v=<?php echo time(); ?>"></head>

<body>

<h2>Đăng nhập</h2>

<form action="login_process.php" method="POST">

<input type="text" name="username" placeholder="Tên đăng nhập" required>

<input type="password" name="password" placeholder="Mật khẩu" required>


<button type="submit">Đăng nhập</button>

<p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
</form>



</body>
</html>