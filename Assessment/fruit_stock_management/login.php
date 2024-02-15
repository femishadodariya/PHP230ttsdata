<?php
require_once("include/config.php");
require_once("include/navbar.php");

if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    $select="select * from tbl_users where email='$em' and password='$pass'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $num_row=mysqli_num_rows($exe);
    if($num_row>0)
    {
        $_SESSION["id"]=$fetch["id"];
        $_SESSION["name"]=$fetch["name"];
        echo "<script>
        alert('you are login successfull');
        window.location='home.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('your email and password are wrong plese try again');
        window.location='login.php';
        </script>";
    }
}
?>
<div class="row container">
<div class="col-md-6 mt-5">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRas2ZomuN1t1fVdZnWmljDyT1C_HLxc1joYg&usqp=CAU" class="img-fluid w-75">
</div>

<div class="col-md-6">
    <form method="post">
    
    <input type="text" name="email" placeholder="Your email" required class="form-control w-75 mt-5">
    <input type="password" name="pass" placeholder="Password" required class="form-control w-75 mt-3">
    <a href="registration.php" class="float-end" style="margin-right: 130px; text-decoration: none;">Create Account?</a>
   
    
    <button type="submit" name="login" class="btn btn-sm btn-primary mt-3">LOGIN</button>
    </form>
    
</div>
</div>
