<?php
include('../db_connection.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_catagory'];

    $query = "DELETE FROM category WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "<script> alert('Hey! Delete Successfuly');window.location.href='category.php';</script>";
        
    }
    else
    {
        echo "<script> alert('Hey! Delete Unsuccessfuly');window.location.href='category.php';</script>";

    }
}
?>