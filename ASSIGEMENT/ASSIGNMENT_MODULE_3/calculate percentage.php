<?php
if(isset($_POST["sub"]))
{
$p=$_POST["p"];
$c=$_POST["c"];
$b=$_POST["b"];
$m=$_POST["m"];
$co=$_POST["co"];
 $sum=$p+$c+$b+$m+$co;
 $cal=$sum/5;
  echo $cal,"%";

  if($cal>=95)
  {
      echo "A+ Grade";
  }
  elseif($cal>=90)
  {
      echo "A Grade";
  }
  elseif($cal>=80)
  {
      echo "B+ Grade";
  }
  elseif($cal>=60)
  {
      echo "B Grade";
  }
  elseif($cal>=50)
  {
      echo "C Grade";
  }
  elseif($cal>=40)
  {
      echo "D Grade";
  }
  elseif($cal>=35)
  {
      echo "E Grade";
  }
   else
   {
       echo "Fail";    
   }
  
 
}
    


?>
<!-- 2 -->
<center>
    <form method="post">
      physics&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="p" placeholder="Enter marks"><br><br>
      camastry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="c" placeholder="Enter marks"><br><br>
      biology&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="b" placeholder="Enter marks"><br><br>
       mathematics&nbsp;&nbsp;&nbsp;<input type="text" name="m" placeholder="Enter marks"><br><br>
       computer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="co" placeholder="Enter marks"><br><br>
     
        <input type="submit" name="sub" value="calculate"><br><br>
        
    </form>
</center>