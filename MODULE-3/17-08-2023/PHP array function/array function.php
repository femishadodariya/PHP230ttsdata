<?php
// array count values(): it is use to count array value.
//$name=array("php","js","php","js","phython","android","windows");
//print_r(array_count_values($name));

//array_combine() : combine two array but first array as key and second array as values.
//$name1=array(0,1,2);
//$name2=array("femish","adodariya","php");
//print_r(array_combine($name1,$name2));

//array_merge() : merge two or more array
//$name1=array("a"=>"femish","b"=>"adodariya","c"=>"php");
//$name2=array("a"=>"phython","b"=>"js");
//print_r(array_merge($name1,$name2))

//array_push(): push a new element in last array
//$name=array("femish","adodariya");
//print_r($name);
//print_r(array_push($name,"php","phython","js"));
//print_r($name)

//pop: delete a last element from array
// $name=array("femish","adodariya","mihir");
// print_r(array_pop($name));
// print_r($name);

// array_reverse()

// $name=array("femish","adodariya","mihir");
// print_r(array_reverse($name));

// in_array() : this function is used to check an array is available in array or not

// $name=array("femish","adodariya","php","phython");
// if(in_array("js",$name))
// {
    // echo "available";
// }
// else
// {
    // echo "not available";
// }

$name=array("femish","brijesh","gautam","jay");
// ksort($name);
//  foreach($name as $value);
//  {
    //  echo $value;
//  }

// krsort($name);
// foreach($name as $value);
// {
    // echo $value;
// }

asort($name);
foreach($name as $value);
{
    echo $value;
}




?>