<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

        input{
            height: 20px;
        
        }
    </style>
</head>
<body>
    <?php
     if(isset($_POST["sub"]))
      $a=$_POST["number"];
    if($a%2==0)
    {
        echo "<h3 align='center' style='color:blue'>even</h3>";
    }
    else
    {
        echo "<h3 align='center' style='color:blue'>odd</h3>";
    }
    ?>

     <!-- form -->
    <center style="margin-top: 200px;">
    <form method="post">
    <input type="text" name="number" placeholder="enter your number">
    <br><br>
    <input type="submit" name="sub" value="submit"> 
    </form>
    </center>
</body>
</html>