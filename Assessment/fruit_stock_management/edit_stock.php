<?php

require_once("include/config.php");
require_once("include/navbar.php");
if(!isset($_SESSION["id"]))
{
    echo "<script>
    window.location='./';
    </script>";
}

if(isset($_GET["upd"]))
{
    $id=$_GET["upd"];
    $select="select * from tbl_stock where id='$id'";
    $exe=mysqli_query($con,$select);
    while($f1=mysqli_fetch_array($exe))
    {


?>
<?php
// update stock
if(isset($_REQUEST["edit"]))
{
    $n=$_REQUEST["fruit_name"];
    $kg=$_REQUEST["KG"];
    $pkg=$_REQUEST["pkg"];
    $to=$kg*$pkg;
    $id=$_GET["upd"];
    $upd="UPDATE `tbl_stock` SET `fruit_name`='$n',`kg`='$kg',`price_per_kg`='$pkg',`total_price`='$to' WHERE id='$id'";
    $exe=mysqli_query($con,$upd);
    if($exe)
    {
        echo "<script>
        alert('stock updated successfully');
        window.location='add_stock.php';
        </script>";
    }
}



?>
<center>



<form method="post">

    <h3>Edit fruit stock</h3>

   
    <div class="form-group mt-5 fs-5">
    <lable>Fruit name</lable>
    <input type="text" name="fruit_name" placeholder="Fruit name" value="<?php echo $f1["fruit_name"]?>" required class="form-control mt-1 w-25">
        </div>
        <div class="form-group mt-3 fs-5">
            <lable>Kg</lable>
    <input type="text" name="KG" placeholder="Kg" value="<?php echo $f1["kg"]?>"  required class="form-control mt-1 w-25" >
        </div>
        <div class="form-group mt-3 fs-5">
            <label>Price/Kg</label>
    <input type="text" name="pkg" placeholder="Price/kg" value="<?php echo $f1["price_per_kg"]?>" required class="form-control mt-1 w-25">
        </div>
    <button type="submit" name="edit" class="btn btn-sm btn-primary mt-4">Edit</button>
        </form>
<?php
    }
}
?>
</center>
    