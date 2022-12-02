<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "lisenshadeworks";
$store_url = "http://shadeworks_warehouse_management-PHP/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  //echo "Successfully connected";
}

?>