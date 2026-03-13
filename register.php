<!DOCTYPE html>
<html>
<head>
<title>Đăng ký</title>
<link rel="stylesheet" href="css.css?v=<?php echo time(); ?>"></head>

</head>

<body>

<h2>Đăng ký</h2>

<form action="register_process.php" method="POST">

<input type="text" name="username" placeholder="Tên đăng nhập" required>

<input type="password" name="password" placeholder="Mật khẩu" required>

<button type="submit">Đăng ký</button>

</form>

</body>
</html>