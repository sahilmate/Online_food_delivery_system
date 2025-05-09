<?php
session_start();
$servername = "127.0.0.1";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$name = isset($_SESSION['name']) ? $_SESSION['name'] : null;
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>