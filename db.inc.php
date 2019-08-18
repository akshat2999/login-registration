<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="maggi";
session_start();

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>