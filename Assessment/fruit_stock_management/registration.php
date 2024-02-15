<?php
require_once("include/config.php");
require_once("include/navbar.php");

if(isset($_POST["add"]))
{
    $nm=$_POST["name"];
    $em=$_POST["email"];
    $pa=$_POST["pass"];
    $mo=$_POST["mobile"];
    $insert="INSERT INTO `tbl_users`( `name`, `email`, `password`, `mobile`) VALUES ('$nm','$em','$pa','$mo')"; 
    $exe=mysqli_query($con,$insert);
    if($exe)
    {
        echo "<script>
        alert('registration  successfull');
        window.location='login.php';
        </script>";
    }
}
?>

<div class="row container">
<div class="col-md-6 mt-5">
    <img src="https://media.istockphoto.com/id/157747680/video/register-now-symbol-animation.jpg?s=640x640&k=20&c=Nkw1G7hkqxAf6spN4yIOjimVZviHLs27WIwSWJO-6pU=" class="img-fluid w-75">
</div>

<div class="col-md-6">
    <form method="post">
    <input type="tel" name="name" placeholder="Your name" pattern="[a-zA-Z]+"  required class="form-control w-75 mt-5">
    
    <input type="email" name="email" placeholder="Your email" required class="form-control w-75 mt-3">
    <input type="password" name="pass" placeholder="Password"  required class="form-control w-75 mt-3">
    <input type="tel" name="mobile" placeholder="Mobile no" pattern="[0-9]{10}" required class="form-control w-75 mt-3">
       <button type="submit" name="add" class="btn btn-sm btn-primary mt-3">REGISTRATION</button>
    </form>
    
</div>
</div>
