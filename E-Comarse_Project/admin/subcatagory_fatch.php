<?php
include('../db_connection.php');

$catagory=$_POST['catagory'];

$sql="SELECT * FROM sub_catagory WHERE catagory_id='".$catagory."'";
$result=mysqli_query($con,$sql);
$output='<option >Select Sub Category</option>';

while($data=mysqli_fetch_array($result))
{
    $output.="<option value='".$data['id']."'>".$data['subcatagory_name']."</option>";
}
echo $output;
?>