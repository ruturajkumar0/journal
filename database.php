<?php
$host="localhost";
$user="root";
$pass="";
$db="ijpr";

$conn=mysqli_connect(
$host,
$user,
$pass,
$db
);

if(!$conn){
die("Database Connection Failed");
}
?>