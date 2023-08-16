<?php
$date= mktime(0,0,0,date("m"),date("d")+1,date("y"));
echo date("d/m/y",$date)
?>