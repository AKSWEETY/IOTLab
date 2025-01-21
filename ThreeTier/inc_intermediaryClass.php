<?php
/*******************************
 * created by kadari
 * php intermediary class file
 * 33333333333333
 */
//include the database class file
include ("inc_databaseClass.php");
//intermediary class
class IntermediaryClass
{
    //mrthod for connecting too the database
    function Getcars($select){
        $dbClass=new DatabaseClass;
        $selectSql="SELECT" .$select. "FROM cars";
        //cal the select query
        try{
            $result=$dbClass->Select($selectSql);
            if($result){
                return $result;
            }//end if

        }catch(Exception $e){
            echo"<script>window.alert(".$e->getMessage().")</script>";
            //JAVASCRIPT
        }//END TRY/CATCH
    }//END FUNCTION
}
?>
