<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sekolah";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connecton failed: " . mysqli_connect_error());
}
?>
