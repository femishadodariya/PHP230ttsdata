<?php
// error_reporting(0);
require_once("../model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        // insert data
        if(isset($_POST["submit"]))
        {
            $n=$_POST["sname"];
            $y=$_POST["year"];
            $c=$_POST["contect"];
            $sid=$_POST["sid"];
            $data=array("name"=>$n,"year"=>$y,"contect_no"=>$c,"student_id"=>$sid);
            $chk=$this->insert('add_student',$data);
            if($chk)
            {
                echo "<script>
                alert('data added');
                window.location='./';
                </script>";
            }
        }

        // fetch
        $fetch=$this->fetchdata('add_student');

        if(isset($_GET["upd"]))
        {
            $id=$_GET["upd"];
           $fetch2=$this->fetchupd('add_student',$id);

        }

        // delete
        if(isset($_GET["delid"]))
        {
            $id=$_GET["delid"];
           $chk=$this->delete('add_student',$id);
           if($chk)
           {
            echo "<script>
             window.location='./';
            </script>";
           }
        }

      

       
        
        
    
        // server
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                //  case
                case'/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    break;
                    
                    case'/update':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("update_details.php");
                    break;
                    

            }
        }
    }
}
$obj=new controller;
?>