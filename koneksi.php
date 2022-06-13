<?php

$server = "sql206.epizy.com";
$user = "epiz_31945995";
$pass = "Gla765CFGLzw0j";
$database = "epiz_31945995_db_user";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
