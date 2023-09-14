<?php
interface A
{
    public function c();
}

interface B
{
    public function m();
}



class D implements A,B
{
    public function c()
    {
        echo "my name is femish"."<br>";
    }

    public function m()
    {
        echo "my surname is adodariya";
    }
    
}
    $obj=new D;
    $obj->c();
    $obj->m();
?>