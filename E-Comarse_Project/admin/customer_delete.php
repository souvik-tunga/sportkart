<?php
include('../db_connection.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM signup WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "<script> alert('Hey! Delete Successfuly');window.location.href='customer.php';</script>";
        
    }
    else
    {
        echo "<script> alert('Hey! Delete Unsuccessfuly');window.location.href='customer.php';</script>";

    }
}
?>