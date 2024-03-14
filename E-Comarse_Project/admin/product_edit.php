<?php
session_start();
if(!isset($_SESSION['id']))
{
    echo "<script>alert('plz login.....'); window.location.href='admin.php';</script>";

}
?>
<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">

<style>
.main{ width: 650px; height: 640px;border-radius:15px; margin-top: 5px; margin-left:540px;}
.sec{ width: 610px; height: 560px; margin-left:30px; margin-top:20px;}
.cate{width: 100%; height: 37px; border-radius:10px; }
.details{width: 95%; height: 60px; border-radius:10px;}
.submit{width: 95%; height: 40px; border-radius:10px;}


</style>
</head> 
<body>



<div class="main shadow bg-secondary  border border-danger ">
    <div class="text-center pt-3"><h3>Update Product</h3></div>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="sec col-md-12 row">
    <div class="col-md-6">
        <label class="row">Product Name :</label>
        <input class="row cate border border-primary text-dark" type="text" name="product" >
</div>
<div class="col-md-6">
        <label class="row">Category :</label>
        <input class="row cate text-center border border-primary" name="category">
          
           
            
        
        </div>
        <div class="mt-3 col-md-6  ">
        <label class="row">Sub Category :</label>
        <input class="row cate border border-primary text-dark" type="text" name="product_price" placeholder="  Sub Category">
        </div>
        <div class="mt-3 col-md-6  ">
        <label class="row">Actual Price :</label>
        <input class="row cate border border-primary text-dark" type="text" name="product_price"  required="required">
        </div>
        <div class="mt-3 col-md-6  ">
        <label class="row">Discount :</label>
        <input class="row cate border border-primary text-dark" type="text" name="discount"  required="required">
        </div>
        <div class="mt-3 col-md-6  ">
        <label class="row">Discount Price :</label>
        <input class="row cate border border-primary text-dark" type="text" name="discount_price"  required="required">
        </div>

        <label class="mt-3 row">Product Description :</label>
        <input class=" details border border-primary text-dark" type="text" name="product_details"  required="required">
        <div class="col-md-12 row">
            <div class="col-md-6 ">
        <label class="mt-2 row ">Product Photo :</label>
        <input class=" cate row text-dark" type="file" name="images" id="img_file2" onchange="readURLMoreImage2(this);" required="required">
        </div>
        <div class="col-md-6 " id="ShowMoreImage2"></div>
        </div>
        <div class="col-md-12 row">
            <div class="col-md-3 ">
                <label class="row">Sub Photo:</label>
                <input class="row cate text-dark" type="file" multiple="multiple" name="product_sub_image[]" id="img_file" onchange="readURLMoreImage(this);" required="required">
            </div>
                
                <div class="col-md-9 " id="ShowMoreImage"></div>
            
        </div>
       <button type="submit" name="submit"class="submit btn btn-success cate ">SUBMIT</button>

    </div>

</div>

</form>


<?php
include('includes/footer.php');

?>
<script  type="text/javascript">
 function readURLMoreImage(input)
    {
      // $('#ShowMoreImage');
      let moreimg='No Image';
      if(input.files)
      {
        $('#ShowMoreImage').html('');
        var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
        
          // let file=$(this);
          var reader=new FileReader();
          reader.onload=function(e)
          {
            
            let img=$('<img />')
             .attr('src',e.target.result)
             .attr('style','margin-right:8px')
             .width(80)
             .height(80);
            // moreimg=moreimg+img;
            $('#ShowMoreImage').append(img);
          };
          reader.readAsDataURL(input.files[i]);
          // alert('Hi');
        }
       
        }
        else{
          $('#ShowMoreImage').html(moreimg);
        }

}
</script>
<script type="text/javascript">

function readURLMoreImage2(input)
    {
      // $('#ShowMoreImage');
      let moreimg='No Image';
      if(input.files)
      {
        $('#ShowMoreImage2').html('');
        var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
        
          // let file=$(this);
          var reader=new FileReader();
          reader.onload=function(e)
          {
            
            let img=$('<img />')
             .attr('src',e.target.result)
             .attr('style','margin-right:8px')
             .width(80)
             .height(80);
            // moreimg=moreimg+img;
            $('#ShowMoreImage2').append(img);
          };
          reader.readAsDataURL(input.files[i]);
          // alert('Hi');
        }
       
        }
        else{
          $('#ShowMoreImage2').html(moreimg);
        }

}
</script>

</body>
</html>
