<?php
require_once("include/config.php");
if(isset($_GET["del"]))
{
    $id=$_GET["del"];
    $del="delete from tbl_stock where id='$id'";
    $exe=mysqli_query($con,$del);
    if($exe)
    {
        echo "<script>
        
        window.location='add_stock.php';
        </script>";
    }

}

// delete account

if(isset($_GET["delete"]))
{
    $id=$_SESSION["id"];
    $del="DELETE FROM `tbl_users` WHERE id='$id'";
    $exe=mysqli_query($con,$del);
    if($exe)
    {
        session_destroy();
        echo "<script>
        alert('your account is delete successfull');
        window.location='home.php';
        </script>";
    }
}



?>