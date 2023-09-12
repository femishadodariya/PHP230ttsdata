<?php
// if within another if there we used nested if 
// if(condition)
// {
//     if(condition)
//     {
//         statements;
//     }
// }
// else 
// {
//     statements;
// }

$a=6;
$b=0;
if($a>$b)
{
    if($a!=0 && $b!=0)
    {
        echo "A is grater than B";
    }
}
else
{
    echo "A is less than B";
}
?>