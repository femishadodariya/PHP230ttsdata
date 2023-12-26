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
        $n1=$_POST["N1"];
        $n2=$_POST["N2"];
        $n3=$_POST["N3"];
        if($n1>$n2 &&  $n1>$n3)
        {
            echo "<h3 align=center>N1 is Max"."<h3>";
        }
        elseif($n2>$n1 && $n2>$n3)
        {
            echo "<h3 align=center>N2 is Max"."<h3>";
        }
        elseif($n3>$n1 && $n3>$n2)
        {
            echo "<h3 align=center>N3 is Max"."<h3>";
        } 
        else
        {
            echo "<h3 align=center>Somthing went wrong"."<h3>";
           
        }
    }
    ?>
    <center>
        <form method="post">
         N1   <input type="text" name="N1" placeholder="Enter number"><br><br>
         N2   <input type="text" name="N2" placeholder="Enter number"><br><br>
         N3   <input type="text" name="N3" placeholder="Enter number"><br><br>
            <input type="submit" name="sub" value="check"><br><br>
        </form>
    </center>
</body>
</html>