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
        catch(Exception $e)
        {
             die(mysqli_query($this->con));    
        }
       
    }

     // insert data

  public function insert($table,$data)
  {
    // convert arr to str
    $colum=array_keys($data);
    $colum1=implode(",",$colum);

    // 
    $value=array_values($data);
    $value1=implode("','",$value);

    // insert
    $select="insert into $table ($colum1) values('$value1')";
    $exe=mysqli_query($this->con,$select);
    return $exe;
  }


}
?>