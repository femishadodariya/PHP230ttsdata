<?php
echo "today date is:".date("d/m/y")."<br>";
echo "tommorow date is:".date("d/m/y",strtotime("+1day"))."<br>";
echo "after 15 day date:".date("d/m/y",strtotime("+15day"))."<br>";
echo "after 4 month:".date("d/m/y",strtotime("+4month"))."<br>";
echo "after 4 year:".date("d/m/y",strtotime("+4year"))."<br>";
echo "before 4 year:".date("d/m/y",strtotime("-4year"))."<br>";

?>