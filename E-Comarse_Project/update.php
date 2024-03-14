<?php
include('db_connection.php');
session_start();
if(isset($_POST['save'])){
    $id=$_SESSION['uid'];
    $fname=$_POST['update_fname'];
    $lname=$_POST['update_lname'];
    $email=$_POST['update_email'];
    $number=$_POST['update_number'];
    $image=$_FILES['image1']['name'];
    $old_img=$_POST['old_img'];

    if($image!=''){
        $image_location="assets/uploaded_img/".$image;
    }
    else{
        $image_location=$old_img;
    }

$sql= "UPDATE `signup` SET `number`=' $number',`email`='$email',`firstname`='$fname',`lastname`='$lname',`img`='$image_location' WHERE `id` = '$id'";
$result=mysqli_query($con,$sql);
if($result){
    $_SESSION['name']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['number']=$number;
    $_SESSION['image']=$image_location;
    if($image!=''){
        unlink($old_img);
        move_uploaded_file($_FILES["image1"]["tmp_name"],$image_location);
    }
    echo "<script> alert ('Hey! Update successfuly'); window.location.href='update_profile.php';</script>";
    }
    else
    {
    echo "<script> alert ('Hey! Update not successfuly');
     window.location.href='upadte_profile.php';</script>";

    }

}
?>