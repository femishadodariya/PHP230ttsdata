<?php
require_once("../model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        // data insert
        if(isset($_POST["sub"]))
        {
            
            $in=$_POST["in"];
            $out=$_POST["out"];
            $mo=$_POST["m"];
            
            $data=array("chek_in"=>$in,"chek_out"=>$out,"time"=>$mo);
            $chk=$this->insert('book_hotel',$data);
            if($chk)
            {
                echo "<script>
                alert('booking successfull');
                </script>";
            }
        }


        // server
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                // case
                case'/':
                    require_once("index.php");
                    require_once("book_hotel.php");
                    break;
            }
        }
    }
}

$obj=new controller;
?>