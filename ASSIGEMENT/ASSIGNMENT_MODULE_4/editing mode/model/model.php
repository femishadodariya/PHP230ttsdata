<?php
class model
{
    public $con="";
    public function __construct()
    {
        // data base connectivity
        
    
        try
        {
            $this->con=new mysqli("localhost","root","","assigement"); 
        }
        catch(Exeption $e)
        {
           die(mysqli_error($this->con));
        }
    }
    // insert data

    public function  insert($table,$data)
    {
        $colum=array_keys($data);
        $colum1=implode(",",$colum);

        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table ($colum1) values('$value1')"; 
        $exe=mysqli_query($this->con,$insert);
        return $exe;

    }

    // fetch data
    public function fetchdata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }


    public function fetchupd($table,$id)
    {
        $select="select * from $table where id='$id'"; 
        $exe=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }


    // delete
     public function delete($table,$id)
     {
        $select="DELETE FROM `add_student` WHERE id='$id'";
        $exe=mysqli_query($this->con,$select);
        return $exe;
     }
    



   


  

    

  

   
}
?>