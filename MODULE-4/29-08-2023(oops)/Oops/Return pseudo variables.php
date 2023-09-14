<?php
class W
{
    public $a=20,$b=20;
    public function A()
    {
        $c=$this->a+$this->b;
        // echo $c;
        return $c;
    }
}
$q=new W;
echo $q->A();
?>