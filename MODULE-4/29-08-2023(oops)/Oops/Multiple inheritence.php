<?php 
// note multiple inheritance in not support by php
class A 
{
    public function display1()
    {
        echo "Hi adarsh"."<br>";
    }
}
class B 
{
    public function display2()
    {
        echo "Hi Fenil";
    }  
}

class C 
{
    public function display3()
    {
        echo "Hi Uttam";
    }  
}

class D extends A,B,C
{
    public function display4()
    {
        echo "Hi Meena";
    }   
}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();
$obj->display4();
?>