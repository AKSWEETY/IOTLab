<?php
/*****************CREATED BY KADARI************
 * php database result logic file
 * *
 * 44444444444444444******* */
include ("inc_intermediaryClass.php");
$select=$_POST["select"];
$result;
$intermediaryClass=new IntermediaryClass();
$result=$intermediaryClass->GetCars($select);


?>
<h3>Query:"SELECT<?php print("$select")?> FROM cars"</h3>

    <table>
		<caption><b>results</b></caption>
			<tr>
                <?php
                    $columnNmaes="<tr>";
                    $numberofcolumns=$result->field_count;
                    $columninfo=$result->fetch_fileds();
                    foreach($columninfo as$column){
                        $columnNmaes.="<th>".ucfirst($column->name)."</th>";
                    }
                    echo "$columnNames</tr>";
                    while($row=$result->fetch_assoc()){
                        print("<tr>");
                    }
                    foreach($row as$value){
                        print("<td>$value</td>");
                    }
                ?>
    </table>
    <p>your search
        <?php print($result -> num_rows);?> row(s).

    </p>

