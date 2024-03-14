<?php
    include('db_connection.php');
    $email=$_POST['email'];
    $password=$_POST['password'];

global $con;
$sql="SELECT * FROM signup WHERE email='".$email."' AND password='".$password."'";
$result=mysqli_query($con,$sql);

$rows=mysqli_num_rows($result);
if($rows>0)
{
    $data=mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['uid']=$data['id'];
    $_SESSION['number']=$data['number'];
    $_SESSION['email']=$data['email'];
    $_SESSION['name']=$data['firstname'];
    $_SESSION['lname']=$data['lastname'];
    $_SESSION['password']=$data['password'];
    $_SESSION['image']=$data['img'];
    $_SESSION['user_id']=$data['number'];
    header('location:index.php');

}
else{
    echo "<script>alert('Username or password does not exitsts!!');window.location.href='index.php';</script>";
}

?>