<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = "freshcare";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $name) or die("koneksi gagal");
mysqli_select_db($koneksi,$name) or die("unknown");

// Check connection
// if ($koneksi->connect_error) {
//     die("Connection failed: " . $koneksi->connect_error);
// }
// echo "Connected successfully";
// ?>
