<?php
include('../db_connection.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_product'];

    $query = "DELETE FROM product WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $query1 = "DELETE FROM product_more WHERE product_id='$id' ";
        $query_run1 = mysqli_query($con, $query1);
        echo "<script> alert('Hey! Delete Successfuly');window.location.href='view_product.php';</script>";
        
    }
    else
    {
        echo "<script> alert('Hey! Delete Unsuccessfuly');window.location.href='view_product.php';</script>";

    }
}
?>