<!doctype html>
<html>
    <head>
        <!--created by Kadari-->
        <title> Kadari Week 3</title>
        <meta charset = "UTF8">
        <?php
         //created by Kadari
         function convertTemp($inputNumber, $unitsString){
            //check what input is entered toC or toF
            switch ($unitsString) {
                case 'toC':
                    # Farenheit enetered. Convert to C
                    #C=5/9(F-32)
                    $celcius=5/9*($inputNumber-32);
                    echo"<p>$inputNumber &deg; F =$celcius &deg; C</p>";
                    break;

                 case 'toF':
                        # Celcius eneterd convert to Farenheit
                        #F=(C*9/5)+32
                        $farenheit=($inputNumber *9/5)+32;
                        echo"<p>$inputNumber &deg; C=$farenheit &deg; F</p>";                      
                        break; 
            
            }
            


         }// end covertTemp()
        ?>
    </head>
    <body>
        <h1>Temperature Converter Week3</h1>
        <p> Enter Temperature and convert to celcius or Farenheit</p>
        <form action= "" method ='POST'>
            <p>
                <label> enter temperature</label>
                <input type="text" name="numberTextBox">
           </p>
            <p>
                <label> Convert Farenheit to Celcius </label>
                <input type ="radio" name="unitsRadio" value="toC">
           </p>
                
           <p>
                <label> Convert Celcius to Farenheit </label>
                <input type ="radio" name="unitsRadio" value="toF">

           </p>
           <p>
              <input type= "submit" name="submitButton" value="Submit">
           </p>
        </form>
        <?php
            //created by Kadari
            //check for roundtrip 
          
            
                echo"<h2> Results of Conversion</h2>";
                //the user values and syores these in variable, if present.
                if(isset($_POST['numberTextBox'])) $input=$_POST['numberTextBox'];
                if(isset($_POST['unitsRadio'])) $units=$_POST['unitsRadio'];
                //validate the input;
                if (is_numeric($input)) {
                    # number eneterd is the radio checked;
                    if (!empty($units)) {
                        # radio button is selected.
                        #call the function
                        convertTemp($input,$units);
                    } else {
                        # radio butto not selected
                        echo"<p> Select temperature units and try again</p>";
                    }//validate radio buttons
                } else {
                    # not numeric error message.
                    echo"<p> Invalid Input. enter a number and try again.</p>";
                }


        //roundtrip check;
        ?>
    </body>
</html>
