<?php
require_once("include/header.php");
require_once("include/conflig.php");
?>

<?php
if(isset($_POST["btn"]))
{
    $tmp_name=$_FILES["img"]["tmp_name"];
    $path="image/".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$path);
    $select="INSERT INTO `image_upload`(`img`) VALUES ('$path')";  
    $exe=mysqli_query($con,$select); 
    if($exe)
    {
        echo "<script>
         alert('image uploaded successfully');
         window.location='./index.php';
        </script>";
    }


}

// fetch

$select="select * from image_upload";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);
?>
<div class="row container">
    <div class="col-md-5 ms-5">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="img" placeholder="image" required class="form-control w-75 " style="margin-top: 200px;">
            <button input type="submit" name="btn" class="btn btn-md btn-primary mt-4 " style="margin-left: 130px;">Upload</button>
            </form>
    </div>

    <!-- image -->
    <div class="col-md-4">
        <img src="<?php echo $fetch["img"]?>" class="img-fluid mt-5 w-50 ms-5">
    </div>

    
</div>