<?php
$host     = "localhost";
$username = "root";           // default XAMPP username
$password = "";               // default XAMPP password
$dbname   = "cs2team65_db";   // MUST match the DB you just imported

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
