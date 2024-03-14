<?php
include('../db_connection.php');

if(isset($_GET['delete_subcatagory']))
{
    $id = $_GET['delete_subcatagory'];

    $query = "DELETE FROM sub_catagory WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "<script> alert('Hey! Delete Successfuly');window.location.href='sub_category.php';</script>";
        
    }
}
?>