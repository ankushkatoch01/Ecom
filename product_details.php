<!---connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>website</title>
        <!---bootstrap css link---->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!---font awesom linklink---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!---style.css---->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <!---navbar--->
      <div class="container-fluid p-0">
        <!---first-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="./image/TIPTOP.jpeg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup><?php cart_item(); ?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price();?>/-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <input type="submit" value="search" class="btn btn-outline-dark" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!--calling cart function-->
<?php
cart();
?>

<!---2nd ---->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">

<?php
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>";
          }else{
            echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome ". $_SESSION['username']."</a>
          </li>";
          }
if(!isset($_SESSION['username'])){
echo "<li class='nav-item'>
<a class='nav-link' href='./users_area/user_login.php'>Login</a>
</li>";
}else{
  echo "<li class='nav-item'>
<a class='nav-link' href='./users_area/logout.php'>Logout</a>
</li>";
}
        ?>
</ul>
</nav>
<!---3nd --->
<div class="bg-light">
    <h3 class="text-center">CLOTHES</h3>
    <p class="text-center">Style into Uniqueness</p>
</div>
<!---4nd ---->

<div class="row px-1">
    <div class="col-md-10">
 <!---products--->
 <div class="row">
    <img src='./image/t10.webp' class='card-img-top' alt='card-img-top'>
    <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <a href='#' class='btn btn-primary'>Add to cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
    </div>



<!----fetching products----->
 <?php
 // calling function
 view_details();
get_unique_categories();
get_unique_brands();
?>



<!-----row end------->
</div>
<!-----colem end------->
</div>
 <div class="col-md-2 bg-secondary p-0">


  <!---brands--->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-dark">
      <a href="" class="nav-link text-light"><h4>Brand</h4></a>
    </li>
    <?php
getbrands();
?>
    
  </ul>

<!---categories--->
<ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-dark">
      <a href="" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    <?php
getcategories();
?>
  </ul>

    </div>
</div>





<!---last child---->
<!--include footer-->
<?php  include("./includes/footer.php")   ?>
      </div>

    <!---bootstrap js link--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>