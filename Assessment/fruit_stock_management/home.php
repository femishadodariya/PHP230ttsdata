<?php
require_once("include/config.php");
require_once("include/navbar.php");
?>
<div class="row container">
    <div class="col-md-5 mt-5">
        <img src="https://media.istockphoto.com/id/1180957972/photo/food-market-kiosk-farmers-shop-farm-food-stall.jpg?s=612x612&w=0&k=20&c=fi7DMWSlBZhbdmvIHQWJOy9LOcfA5s2OzXVPa-snVXg=" class="img-fluid">
    </div>


    <!--  -->

    <div class="col-md-5">
        <?php
        if(!isset($_SESSION["id"]))
        {
        ?>
      <button type="submit" name="addstock" class="btn btn-lg btn-primary" style="margin-top: 200px; margin-left: 250px; width: 200px;" onclick="lo()">Add fruit stock<span class="bi bi-chevron-double-right"></span></button>
      <?php
        }
        else
        {
        ?>
        <a href="add_stock.php" button type="submit" name="addstock" class="btn btn-lg btn-primary" style="margin-top: 200px; margin-left: 250px; width: 200px;">Add fruit stock<span class="bi bi-chevron-double-right"></span></button></a>
        <?php
        }
        ?>
    </div>
</div>

<script>
    function lo()
    {
        alert('plese login first');
        window.location='login.php';

    }
</script>
