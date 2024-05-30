<?php
include ("database.php");
$con=connect();
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
$query = mysqli_query($con,$sql);
if($query){
    header("location: ../register.html");
}
?>