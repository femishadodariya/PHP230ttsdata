<?php
require_once("include/config.php");
require_once("include/navbar.php");
if(!isset($_SESSION["id"]))
{
    echo "<script>
    window.location='./';
    </script>";
}

if(isset($_POST["addfstock"]))
{
  $n=$_POST["fname"];
  $kg=$_POST["kg"];
  $pri=$_POST["price"];
  $to=$kg*$pri;
  $id=$_SESSION["id"];
  $inse="INSERT INTO `tbl_stock`( `r_id`, `fruit_name`, `kg`, `price_per_kg`, `total_price`) VALUES ('$id','$n','$kg','$pri',$to)";
  $exe=mysqli_query($con,$inse);
  if($exe)
  {
    echo "<script>
    alert('stock added');
    window.location='add_stock.php';
    </script>";
  }
}


// sum
if(isset($_SESSION["id"]))
{
    $id=$_SESSION["id"];
    $sum="SELECT SUM(kg) FROM tbl_stock WHERE r_id='$id'";
    $exe=mysqli_query($con,$sum);
    $fetch=mysqli_fetch_array($exe);
}


?>

<div class="row">
  <div class="col-md-5" style="margin-top: 150px; margin-left: 100px;">
     <form method="post">
     <input type="text" name="fname" placeholder="Fruit name"  required class="form-control w-50 mt-3">
  
     <input type="tel" name="kg" placeholder="kg" pattern="[0-9]+" required class="form-control w-50 mt-3">
       <input type="text" name="price" placeholder="price/kg" pattern="[0-9]+" required class="form-control w-50 mt-3">
      <button type="submit" name="addfstock" class="btn btn-sm btn-primary mt-4">Add stock</button>
    
    </form>
  </div>


    <!-- table -->
    
    <div class="col-md-6" style="margin-top: 70px;">
      
     
      <body>
    
        <div class="alert alert-success">
         
          <span class="text-dark fs-5">Total stock:&nbsp;<?php if($fetch["SUM(kg)"])
          {
            echo $fetch["SUM(kg)"];
          }
          else
          {
            echo "0";
          }
          ?>&nbsp;Kg</span>
          
        </div><br><br>
      
    
        
         
      
      <table id="dataTable">
          <thead>
              <tr>
                  <th>NO</th>
                  <th>Fruit name</th>
                  <th>Kg</th>
                  <th>Price/Kg</th>
                  <th>Total price</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
              </tr>
          </thead>
          <tbody>
            <?php
            // fetch

            $i=0;
  $id=$_SESSION["id"];
  $sele="SELECT * FROM `tbl_stock` WHERE r_id='$id'";
  $exe=mysqli_query($con,$sele);
  while($fetch=mysqli_fetch_array($exe))
  {
            $i++;
             
            ?>
              <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $fetch["fruit_name"]?></td>
                <td><?php echo $fetch["kg"]?>&nbsp;kg</td>
                <td><?php echo $fetch["price_per_kg"]?>/-</td>
                  <td><b><?php echo $fetch["total_price"]?></b></td>
                 

                  <td><a href="edit_stock.php?upd=<?php echo $fetch["id"]?>" class="btn btn-sm btn-primary"><span class="bi bi-pencil"></span></a></td>


                  <td><a href="delete.php?del=<?php echo $fetch["id"]?>" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a></td>
                  
                </tr>
              
             <?php
  }
            
            ?>
          
              
            
          </tbody>

          
      </table>
      
      
     
     
      
      </body>
      </html>
      
    </div>
</div>

