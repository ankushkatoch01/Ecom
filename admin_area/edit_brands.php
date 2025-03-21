<?php
if(isset($_GET['edit_brands'])){
    $edit_brands=$_GET['edit_brands'];
    //echo $edit_brand;
    $get_brands="select * from `brands` where brand_id=$edit_brands";
    $result=mysqli_query($con,$get_brands);
    $row=mysqli_fetch_assoc($result);
   $brand_title=$row['brand_title'];
  // echo $brand_title;
}

if(isset($_POST['edit_cat'])){
    $brand_title=$_POST['brand_title'];

    $update_query="update `brands` set brand_title='$brand_title' where brand_id=$edit_brands";
    $result_cat=mysqli_query($con,$update_query);
    if($result_cat){
        echo "<script>alert('brand is been updated successfully')</script>";
        echo "<script>window.open('./index.php?view_brand.php','_self')</script>";

    }
}

?>


<div class="container mt-3">
    <h1 class="text-center">Edit Category</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline w-50 m-auto mb-4 m-auto">
            <label for="brand_title" class="form-label">Brands Title</label>
            <input type="text" id="brand_title" value="<?php echo $brand_title?>" name="brand_title" class="form-control" required="required">
        </div>
            <input type="submit" value="update brand" class="btn btn-dark text_light px-3 mb-3" name="edit_cat">
    </form>
</div>


