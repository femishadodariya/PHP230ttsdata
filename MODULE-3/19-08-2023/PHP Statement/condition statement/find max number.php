<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
      if(isset($_POST["sub"]))
      {
      $n1=$_POST["n1"];
      $n2=$_POST["n2"];
      $n3=$_POST["n3"];
      if($n1>$n2 & $n1>$n3)
      {
        echo "<h3 align='center'>N1 is max</h3>";
      }
      elseif($n2>$n1 & $n2>$n3)
      {
        echo "<h3 align='center'>N2 is max</h3>";
      }
      elseif($n3>$n1 & $n3>$n2)
      {
        echo "<h3 align='center'>N3 is max</h3>";
      }

      else
      {
        echo "somthing went wrong";
      }
    }
    ?>
    <center style="margin-top: 100px;"> 
    <form method="post">
   N1 <input type="text" name="n1" placeholder="number"><br><br>
   N2 <input type="text" name="n2" placeholder="number"><br><br>
   N3 <input type="text" name="n3" placeholder="number"><br><br>
    <input type="submit" name="sub" value="submit">
    
    </form>
    </center>
</body>
</html>