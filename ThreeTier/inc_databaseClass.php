<!--doctype html>
<?php
/*****************************************
 * database calss file
 * created by Kadari
 * 22222222222222222222222222
 */
   class DatabaseClass{
    static $connection;//this is a property
    /*******connection function */
    public function connect(){
        if(! isset(self::$connection)){
            include("inc_dbconfig.php");
            self::$connection=new mysqli($host,$username,$password,$dbname);
        }
        if(self::$connection===false){
            //handle error
            return false;
        }
        return self::$connection;
    }//end function connection
   
   /******************************queryfunction************** */
   public function Select($query){
    //connect to the database
    $connection=$this->connect();
    //query the database
    $result=$connection->query($query);
    //close the connection
    $this->CloseConnection();
    if(!$result){
        return $connection->error;

    }else{
        return $result;//returns the result.
    }
    }//end select()

    public function error(){
        //grts the last error from the database
        $connection=$this->$connect();
        return $connection->error;
    }//end function error
    public function CloseConnection(){
        self::$connection->close();
    }
    }//end class
?>