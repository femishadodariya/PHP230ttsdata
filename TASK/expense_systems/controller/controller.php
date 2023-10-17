<?php
error_reporting(0);
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent:: __construct();

        // insert data
        if(isset($_POST["sub"]))
         {
            $ti=$_POST["title"];
            $am=$_POST["ammount"];
            $da=$_POST["date"];
            $data=array("exp_title"=>$ti,"Amount"=>$am,"date"=>$da);
            $chk=$this->insertalldata('tbl_expence',$data);
            if($chk)
            {
                echo "<script>
                alert('data add sucessfully')
                </script>";
            }
         }

        //  fetch data
        $fetch=$this->selectalldata('tbl_expence');



        
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                // rounting

                case'/':
                    require_once("index.php");
                     require_once("form.php");
                    require_once("content.php");
                    break;
            }
        }
    }
}
$obj=new controller;
?>