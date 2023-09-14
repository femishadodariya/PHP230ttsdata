<?php
class A
{

    public function H()
    {
        echo "my name is femish"."<br>";
    }
}

class B extends A
{
    public function H1()
    {
        echo "My surname is adodariya";
    }
}
$q=new B;
$q->H();
$q->H1();
?>