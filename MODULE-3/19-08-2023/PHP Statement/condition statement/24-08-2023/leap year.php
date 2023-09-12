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
        $c=$_POST["year"];
        if($c%4==0)
        {
            echo "<h3> leap year"."</h3>";
        }
        else
        {
            echo "<h3> not leap year"."</h3>";
        }
      }
    ?>
    <center>
        <form method="post">
            <input type="text" name="year" placeholder="enter year"><br><br>
            <input type="submit" name="sub" value="sand"><br><br>

        </form>
    </center>
</body>
</html>