<?php
function connect(){
$host = "localhost";
$database = "coffe_blog";
$user = "root";
$password = "";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$database);
return $conn;
}
?>