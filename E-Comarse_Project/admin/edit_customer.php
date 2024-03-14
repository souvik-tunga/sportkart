<?php
include('security.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE signup SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "<script> alert('Hey! Updated Successfuly');window.location.href='customer.php';</script>";
        

    }
    else
    {
        echo "<script> alert('Hey! Updated Unsuccessfuly');window.location.href='customer.php';</script>";
       
    }
}

?>