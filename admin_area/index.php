<!---connect file-->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin dashboard</title>
        <!----bootstrap css--->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
<!---font awesom-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!---css file-->
        <link rel="stylesheet" href="../style.css">
        <style>
 .admin_image{
    width: 100px;
    object-fit: contain;

}
.footer{
position: absolute;
bottom: 0;
}
body{
    overflow-x: hidden;
}
.product_img{
    width: 100px;
    object-fit: contain;
}
        </style>

        </head>

    <body>
<!----navbar--->        
<div class="container-fluid p-0">
    <!----first--->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome</a>
                </li>
            </ul>
</nav>
        </div>
    </nav>

<!----2nd child--->
<div class="bg-dark">
    <h3 class="text-center p-2 text-white">Manage Details</h3>
</div>

<!----3rd child--->
<div class="row">
    <div class="col-md-12 bg-light p-1 d-flex align-items-center">
       <div class="px-3">
       <a href=""><img src="../image/TIPTOP.jpeg" alt="" class="admin_image"></a>
       <p class="text-dark
        text-center">ANKUSH</p>
       </div> 
       <!---button*10>a.nav-link.text-dark.bg-grey.my-1---->
       <div class="button text-center">
        <button class="my-3"><a href="insert_product.php" class="nav-link text-black bg-grey my-1">Insert Products</a></button>
        <button><a href="index.php?view_products" class="nav-link text-black bg-grey my-1">View Products</a></button>
        <button><a href="index.php?insert_category" class="nav-link text-black bg-grey my-1">Insert categories</a></button>
        <button><a href="index.php?view_categories" class="nav-link text-black bg-grey my-1">view categories</a></button>
        <button><a href="index.php?insert_brand" class="nav-link text-black bg-grey my-1">insert Brand</a></button>
        <button><a href="index.php?view_brand" class="nav-link text-black bg-grey my-1">View Brand</a></button>
        <button><a href="index.php?list_orders" class="nav-link text-black bg-grey my-1">All Orders</a></button>
        <button><a href="" class="nav-link text-black bg-grey my-1">Payments</a></button>
        <button><a href="" class="nav-link text-black bg-grey my-1">List User</a></button>
        <button><a href="" class="nav-link text-black bg-grey my-1">Logout</a></button>
       </div>
    </div>
</div>


<!----4th child--->
<div class="container my-3">
    <?php  
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');

    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    if(isset($_GET['view_products'])){
        include('view_products.php');
    }
    if(isset($_GET['edit_products'])){
        include('edit_products.php');
      }
      if(isset($_GET['delete_product'])){
        include('delete_product.php');
      }
      if(isset($_GET['view_categories'])){
        include('view_categories.php');
      }
      if(isset($_GET['view_brand'])){
        include('view_brand.php');
      }
      if(isset($_GET['edit_category'])){
        include('edit_category.php');
      }
      if(isset($_GET['edit_brands'])){
        include('edit_brands.php');
      }
      if(isset($_GET['delete_category'])){
        include('delete_category.php');
      }
      if(isset($_GET['delete_brands'])){
        include('delete_brands.php');
      }
      if(isset($_GET['list_orders'])){
        include('list_orders.php');
      }
      if(isset($_GET['delete_orders'])){
        include('delete_orders.php');
      }
    ?>
</div>

<!---last child---->
<?php  include("../includes/footer.php")   ?>
      
      </div>
</div>

<!----bootstrap js--->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
