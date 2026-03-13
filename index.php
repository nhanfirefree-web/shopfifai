<?php
include "connect.php";

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>Car Shop</title>
<link rel="stylesheet" href="css.css?v=<?php echo time(); ?>"></head>

</head>

<body>

<nav class="navbar">

    <div class="nav-left">
        <a href="#">Sản phẩm</a>
        <a href="#">Tìm Xe</a>
        <a href="#">Dịch vụ</a>
    </div>
  

   <?php session_start(); ?>

<div class="nav-right">

<?php
if(isset($_SESSION['user'])){
?>

Xin chào <?php echo $_SESSION['user']; ?>

<a href="logout.php">Logout</a>

<?php
}else{
?>

<a href="login.php" class="login-btn">Đăng nhập</a>

<?php
}
?>

</div>

</nav>

<div class="container">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<div class="car">

<h3><?php echo $row['Name']; ?></h3>

<p>Hãng: <?php echo $row['Brand']; ?></p>

<p>Giá: <?php echo $row['Price']; ?> VND</p>

<img src="img/<?php echo $row['image']; ?>" width="200">

<p><?php echo $row['description']; ?></p>

<button onclick="buyCar()">Mua xe</button>

</div>

<?php
}
?>

</div>


<script src="js.js"></script>
<footer class="footer">
<p>© 2026 Car Shop | CTUET</p>
</footer>
</body>
</html>