<?php
class A
{
    public function A()
    {
        echo "hi i am femish"."<br>";
    }
}
 class B extends A
 {
    public function B()
    {
        echo "i am study in tops technology";
    }
 }

 $obj=new B;
 $obj->A();
 $obj->B();
?>