<?php include('../includes/connect.php'); 
include('../functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-login</title>

    <!---bootstrap css link---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!---font awesom linklink---->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
        body{
            overflow-x:hidden;
        }
     </style>
</head>
<body>
<div class="container-fluid my-4 mx-4">
    <h2 class="text-center"> User Login</h2>
    <div class="row d-flex align-items-center justify-content-center mt-5">
    <div class="col-lg-12 col-xl-6">
        <form action="" method="post">
            <!--ussername field-->
<div class="form-outline mb-4">
    <label for="user_username" class="form-label">Username</label>
    <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
</div>
<!--password field-->
<div class="form-outline mb-4">
    <label for="user_password" class="form-label">Password</label>
    <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
</div>

<div class="mt-3 pt-2">
    <input type="submit" value="Login" class="bg-dark text-light py-2 px-3 border-0" id="" name="user_Login">
    <p class="small fw-bold mt-2 pt-1 mb-0" >Don't have an account ?  <a href="user_registration.php" class="text-danger"> Register </a> </p>
</div>
</form>
        </div>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['user_Login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];

$select_query="select * from `user_table` where username='$user_username'";
$result=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($result);
$row_data=mysqli_fetch_assoc($result);
$user_ip=getIPAddress();

// cart item
$select_query_cart="select * from `cart_details` where ip_address='$user_ip'";
$select_cart=mysqli_query($con,$select_query_cart);
$row_count_cart=mysqli_num_rows($select_cart);
if($row_count>0){
    $_SESSION['username']=$user_username;
    if(password_verify($user_password,$row_data['user_password'])){
      //  echo "<script>alert('login successful')</script>";
      if($row_count==1 and $row_count_cart==0){
        $_SESSION['username']=$user_username;
        echo "<script>alert('login successful')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      }else{
        $_SESSION['username']=$user_username;
        echo "<script>alert('login successful')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
      }
    }else{
        echo "<script>alert('Invlaid credentials')</script>";   
    }

}else{
    echo "<script>alert('Invlaid credentials')</script>";

}




}

?>
