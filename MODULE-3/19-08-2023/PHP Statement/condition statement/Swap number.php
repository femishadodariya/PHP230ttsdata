<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src='main.js'></script>
</head>

<body>

<?php
if(isset($_POST["sub"])) 
{

$a=$_POST["n1"];
$b=$_POST["n2"];
$r=$_POST["n3"];


 $a=$a+$b; //20+10=30
 $b=$a-$b; //30-10=20
 $a=$a-$b; //30-20=10

     echo  "<h2 align='center'>After swaping A is".$a."<br>". "and B value is".$b."<br>"."c value is".$r."</h2>";
}


?>

<!--  -->
    <center style="margin-top: 100px;">
    <form method="post">
    <input type="text" name="n1" placeholder="Enter" style="height: 40px; width: 20%; font-size:20px;  text-align: center;" required class="form-control"><br><br>
    <input type="text" name="n2" placeholder="Enter"style="height: 40px; width: 20%;font-size:20px;  text-align: center;" required class="form-control"><br><br>
    <input type="text" name="n3" placeholder="Enter"style="height: 40px; width: 20%;font-size:20px;  text-align: center;" required class="form-control"><br><br>
    <input type="submit" name="sub" value="submit"style="height: 40px; width: 10%;" required class="form-control"><br><br>
    </form>
    </center>
</body>
</html>



