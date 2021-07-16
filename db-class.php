<?php

$host = "localhost";
$database = "userdetails";
$username = "root";
$password="";
$mysqli = new mysqli($host,$username,$password,$database);
if($mysqli->connect_error){
die("connection attempt failed!");
}



