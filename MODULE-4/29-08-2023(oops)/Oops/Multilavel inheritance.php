<?php
class A
{
    public function z()
    {
        echo "My first name is femish"."<br>";
    }
}
    

class B extends A
{
    public function r()
    {
        echo "My last name is adodariya";
    }
}
$q=new B;
$q->z();
$q->r();
?>