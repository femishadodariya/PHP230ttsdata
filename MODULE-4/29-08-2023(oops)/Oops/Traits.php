<?php
trait A
{
    public function A()
    {
        echo "Hello i am femish"."<br>";
    }
}
 trait B
 {
    public function B()
    {
        echo "My surname is Adodariya";
    }
 }
class C
{
    use A,B;
}
$obj=new C;
$obj->A();
$obj->B();
?>