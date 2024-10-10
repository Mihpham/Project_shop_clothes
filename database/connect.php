<?php
$servername = "localhost";
$username = "root";
$password = "badien217";
$dbname = "shop_quanao";
 
// tạo connection
$sql = mysqli_connect($servername, $username, $password, $dbname);
// kiểm tra connection
if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
};

?>