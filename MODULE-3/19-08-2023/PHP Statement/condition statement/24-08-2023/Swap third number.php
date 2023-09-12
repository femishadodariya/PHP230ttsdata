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
        $a=$_POST["num1"];
        $b=$_POST["num2"];
        // using third variables to swap a numbers 
        //$a=10,$b=20 
        $temp=$a;//10
        $a=$b; //20
        $b=$temp;//10
        echo "<h3 align='center'>After swaping a is ".$a."and b values is :".$b."<h3>";
     
     } 
    ?>
    <center>
        <form method="post">
            Enter N1 numbers :<input type="text" name="num1" placeholder="Numbers 1*" required>
            <br><br>
            Enter N2 Numbers :<input type="text" name="num2" placeholder="Numbers 2*" required>
            <br><br>
          
           
            <input type="submit" name="sub" value="Submit">
        </form>
    </center>
    
</body>
</html>