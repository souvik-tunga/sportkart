<?php
include('../db_connection.php');
session_start();
if(isset($_POST['update'])){
    $id=$_SESSION['id'];
    $name=$_POST['update_name'];
    $email=$_POST['update_email'];
    $image=$_FILES['image']['name'];
    $old_img=$_POST['old_img'];
    

    if($image!=''){
        $image_location="admin_photo/".$image;
    }
    else{
        $image_location=$old_img;
    }
global $con;

$sql= "UPDATE `admin` SET `email`='$email',`name`='$name',`image`='$image_location' WHERE `id` = '$id'";
$result=mysqli_query($con,$sql);
if($result){
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['image']=$image_location;
    echo $sql;
    if($image!=''){
        if($old_img!=''){
            unlink($old_img);
        }
        
        move_uploaded_file($_FILES["image"]["tmp_name"],$image_location);
    }
    echo "<script> alert ('Hey! Update successfuly'); window.location.href='adminprofile.php';</script>";
    }
    else
    {
    echo "<script> alert ('Hey! Update not successfuly');
     window.location.href='adminprofile.php';</script>";

    }


}
?>