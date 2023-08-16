<?php
$price=1500;
$today=mktime(0,0,0,date("m"),date("d"),date("y"));
$tommorow=mktime(0,0,0,date("m"),date("d")+1,date("y"));
$diff=($tommorow-$today)/86400;

$total=$price*$diff;

echo $total
?>