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
            $n=$_POST["Y"];
            $ci=$p*$r*$n/100;
            echo $ci;
         }
    ?>
    <!-- form -->
    <form method="post">
    <input type="text" name="PA" placeholder="Principle amt.."><br><br>
    <input type="text" name="R" placeholder="rate"><br><br>
    <input type="text" name="Y" placeholder="year"><br><br>
    <input type="submit" name="sub" value="submit">
</form>
</body>
</html>