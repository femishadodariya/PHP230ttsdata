<?php
if(isset($_POST["sub"]))
{
    $e=$_POST["E"];
    $p=$_POST["P"];
    if($e==123 & $p==123456)
    {
        header("location:Webpg.php");
    }
    else
    {
        echo "Wrong";
        header("refresh:2,in.php");
    }
}
?>