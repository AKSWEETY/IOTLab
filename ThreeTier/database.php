<!--doctype html>
<html>
    <head>
        <!---created by Kadari
        55555555555555555555555555
        ---->
        <meta charset="utf-8">
        <title>php three-tier data access</title>
        <style type="text/css">
            body{
                font-family:sans-serif;
                background-color:lightyellow;
                margin:50px;
            }
            table{
                background-color:lightgray;
                border-collapse: collapse;
                border: 1px solid gray;
            }
            td{padding:5px;}
            tr:nth-chikd(odd){ background-color:whhite;}
            </style>
    </head>
    <body>
        <h1> Querying a Mysql database.</h1>
        <form method="POST" action="#">
            <p> select a field to diaplay:
                <!--- add a slect box containing options--->
                <!---for select query---->
                <select name="select">
                    <?php
                    function Sticky($value)
                    {
                        $selected="";
                        if(isset($_POST['select'])){
                            $_POST['select']==$value?$selected='selected':$selected="";

                        }
                        echo $selected;
                    }//end function
                    ?>
                    <option value="*"<?php  Sticky("*");?>> ALL COLUMNS IN THE TABLE</option>
                    <option value="make,model"<?php  Sticky("make,model");?>> Car make and model</option>
                    <option value="make,model,mileage,year"<?php  Sticky("make,model,mileage,year");?>> Car make,model,mileage, year</option>
                </select>
                </p>
                <p><input type="submit" value="select query" name="selectQuery"></p>
                </form>
                <?php 
                //if the form has been submitted then display the result page.
                if(isset($_POST['selectQuery'])){
                include'inc_QueryResults.php';
                }//end if

                ?>
                    



        
    <body>
</html>