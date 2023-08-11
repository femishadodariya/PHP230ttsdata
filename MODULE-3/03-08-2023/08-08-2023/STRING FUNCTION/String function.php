<?php
// 1.strlen

$a="my name is femish";
echo strlen($a)."<br>";

// 2.strpos (Q)

echo strpos("name femish","name")."<br>";

 // 3.ucfirst(): convert any string of first letter in uppercase  

  $a="femish";
  echo ucfirst($a)."<br>";

  // 4.ucwords(): convert each words of first letter in uppercase 

  $a="my name is femish";
  echo ucwords($a)."<br>","<br>";

  // 4. strtoupper:
  $a="femish";
  echo strtoupper($a)."<br>";

  // 5. strtolower: 

  $a="FEMISH";
  echo strtolower($a)."<br>";

  // 6. base64_encode: encode is used to convert non readable formate of any string

  $a="9847564738393";
  echo base64_encode($a)."<br>";

  // 7. base64_decode : decode is used to convert readable format of any string

  $a="OTg0NzU2NDczODM5Mw==";
  echo base64_decode($a)."<br>";

  // 7. md5() : string function i.e used to convert any string in encoded formate after md5 we never decode string

  $a="9616 9616";
  echo md5($a)."<br>";

  // 8. rand() : convert any rand values

  echo rand (1111,9999)."<br>";

  // 9. strstr : match string to string and return all matched all string and  follow case senstive
  
  echo strstr("tops technology","tops")."<br>";
  echo strstr("adodariya femish","femish")."<br>";

  // 10. stristr : match string to string and return all matched all string and does not follow case senstive (Q)

  echo stristr("tops technology","tops")."<br>";
  echo stristr("adodariya femish","femish")."<br>";

  // 11. trim() :trim is used to trim any string from left and right both side 

  $a="Adodariya femish";
  echo trim($a,"femish")."<br>"."<br>";

  // 12.ltrim()
  $a="Adodariya femish";
  echo ltrim($a,"Adodariya")."<br>";
  echo ltrim($a,"femish")."<br>";

  // 13.rtrim()
  $a="Adodariya femish";
  echo rtrim($a,"Adodariy")."<br>";
  echo rtrim($a,"femish")."<br>";

  // 14.strrev : it is used to lettar start from revers.
  $a="Adodariya femish";
  echo strrev($a)."<br>";

  // 15.explode():explode is used to convert any string to array

  $a="Adodariya femish femish";
  print_r (explode(" ",$a))."<br>";

  // 16.implode():implode is used to convert any array into string

 $a= array(0=>"adodariya",1=>"femish");
 echo implode(" ",$a)."<br>";

 // 17.str_shuffle

 $a="my name is femish";
 echo str_shuffle($a)


 
?>

