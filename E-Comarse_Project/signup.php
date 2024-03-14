<?php
include('db_connection.php');

 
$number=$_POST['number'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];

$sql ="INSERT INTO signup(`number`,`email`,`firstname`,`lastname`,`password`) VALUES ('".$number."','".$email."','".$fname."','".$lname."','".$password."')";
$result=mysqli_query($con,$sql);
if($result){
    
    echo "<script> alert ('register successfuly'); window.location.href='index.php';</script>";
}

?>