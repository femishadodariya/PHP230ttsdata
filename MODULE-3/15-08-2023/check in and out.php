<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
  <div class="row">
    <div class="col" style="border: solid 2px black; height:auto; padding:20px; width:30%;" class="col-md-6">
    <form method="post" style="margin-left:10px">
   <h1>price of hotel:1000</h1> <br><br>

   <input type="date"  name="checkin" style="font-size:30px" placeholder="check in date"><br><br>

   <input type="date"  name="checkout" style="font-size:30px" placeholder="check out date"><br><br>

   <input type="submit" name="sub" value="submit">
</form>
    </div>
    <div class="col-6">
    <?php
      if(isset($_POST["sub"]))

      {
        $price=1000;
        $checkin=strtotime($_POST["checkin"]);
        $checkout=strtotime($_POST["checkout"]);
        $diff=($checkout-$checkin)/86400;
        $total=$price*$diff;

        echo "<h1>$total</h1>";
      }
    ?>
    </div>
  </div>
</div>
</body>
</html>