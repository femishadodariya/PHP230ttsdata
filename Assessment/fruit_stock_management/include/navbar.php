<?php
 $mainurl="http://localhost/Assessment/fruit_stock_management/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script>
          $(document).ready(function() {
              // Initialize DataTable
              var dataTable = $('#dataTable').DataTable();
      
              // Add search functionality
              $('#search').on('keyup', function() {
                  dataTable.search($(this).val()).draw();
              });
          });
      </script>

</head>
<body>
    <div class="nav navbar bg-primary p-3 text-white">
        
        <h3><i>Fruit stock managment</i></h3>
        <?php
           if(!isset($_SESSION["id"]))
           {
        ?>
        
       <li class="dropdown"><a data-bs-toggle="dropdown" class="dropdown-toggle" href="">Account</a>
     <ul class="dropdown-menu p-2">
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Registration</a></li>

     </ul>
    </li>
    <?php
           }
           else
           {
            ?>
             <li class="dropdown"><a data-bs-toggle="dropdown" class="dropdown-toggle p-3" href=""><?php echo $_SESSION["name"]?></a>
     <ul class="dropdown-menu p-2">
        
        <li><a href="delete.php?delete" onclick="return confirm('are you sure for delete your account?')">Delete Account</a></li>
        <li><a href="logout.php" onclick="return confirm('are you sure for logout?')">Log out</a></li>

     </ul>
    </li>
    <?php
           }
           ?>
    </div>

</body>


</html>