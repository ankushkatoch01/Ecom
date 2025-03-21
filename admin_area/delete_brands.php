<?php

if(isset($_GET['delete_brands'])){
    $delete_brand=$_GET['delete_brands'];
   // echo $delete_brand;
   $delete_query="Delete from `brands` where brand_id=$delete_brand";
   $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('brand is been deleted successfully')</script>";
        echo "<script>window.open('./index.php?view_brand.php','_self')</script>";
    }
}


?>