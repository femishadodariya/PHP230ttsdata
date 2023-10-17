<?php
class model 
{
    public $con="";
    public function __construct()
    {
        // data base connectivity
        try 
        {
            $this->con=new mysqli("localhost","root","","exp");
        }
        catch(Exception $e)
        {
           die(mysqli_query($this->con));
        }
    }

    // insert data

    public function insertalldata($table,$data)
    {
        // convert array to 
        $colum=array_keys($data);
        $colum1=implode(",",$colum);

       //    convert array to values
       $value=array_values($data);
       $value1=implode("','",$value);

      //    insert data
      $insert="insert into $table($colum1) values('$value1')"; 
      $exe=mysqli_query($this->con,$insert);
      return $exe;

    }

    // fetch data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

}
?>