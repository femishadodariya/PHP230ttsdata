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
        $l=$_POST["L"];
        if($l>=1901 && $l<=2016)
        {
            if($l%4==0)
            {
               
                
                    echo "<h3 align=center>Leap year"."<h3>";
            }
            else
            {
                echo "<h3 align=center>Not Leap year"."<h3>";
            }
        }
        else
        {
            echo "<h3 align=center>plese enter valide year"."<h3>";
        }
        
     }
    ?>
    <center>
        <form method="post">
            <input type="text" name="L" placeholder="Year"><br><br>
            <input type="submit" name="sub" value="check"><br><br>
        </form>
    </center>
</body>
</html>