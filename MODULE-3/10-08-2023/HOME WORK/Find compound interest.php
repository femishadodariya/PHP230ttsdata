<?php
function cal($p,$r,$n)

{
    $c=$p*pow((1+$r/100),$n);
    echo $c;
}
cal(10000,5,2)
?>