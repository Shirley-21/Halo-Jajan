<?php

$server = "localhost";
$user   = "root";
$pass   = "";
$database = "halojajan";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal Tersambung dengan database.')</script>");
}
?>