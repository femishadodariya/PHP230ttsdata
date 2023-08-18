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
    $p=$_POST["PA"];
    $r=$_POST["R"];
    $n=$_POST["N"];
    $si=$p*$r*$n/100;
    echo $si;
}
?>
    <form method="post">

     <input type="text" name="PA" placeholder="P.amt"><br><br>
     <input type="text" name="R" placeholder="Rate"><br><br>
     <input type="text" name="N" placeholder="Year"><br><br>
     <input type="submit" name="sub" value="submit"><br><br>
     
</form>
</body>
</html>