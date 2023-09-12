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
        $e=$_POST["E"];
        $p=$_POST["P"];
        if($e==123 & $p==12345)
        {
            header("location:Webpg.php");
        }
        else
        {
            echo "wrong";
            header("refresh:2,Location.php");
        }
     }
    ?>
    <center>
    <form method="post">
        <input type="text" name="E" placeholder="E-mail"><br><br>
        <input type="password" name="P" placeholder="password"><br><br>
        <input type="submit" name="sub" value="Log in"><br><br>
    </form>
    </center>
</body>
</html>