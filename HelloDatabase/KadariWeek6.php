<!doctype html>
<html>
    <head>
        <!--created by Kdari-->
        <title>hello to objects</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1> Kadari Week 6 Objects</h1>
        <form action ="kadariweek6.php" method="POST">
            <p>please enter name:<input type="text" name="helloTextBox" value= "<?php if(isset($_POST['helloTextBox'])) echo $_POST['helloTextBox']?>"></p>
            <p><input type="submit" value="Submit"  name="submitButton"></p>
        </form>
        <p>
            <?php
             //cretaed by Kadari
             //roundtrip
             if (isset($_POST["submitButton"])) {
                # input
                $nameEntered =$_POST["helloTextBox"];
                if (strlen(trim($nameEntered))>0) {
                    # VALID STRING entered
                    //instantiate the class and display message
                    //include 
                    include("inc_kadariW6Hello.php");
                    //instantiated the class
                    $welcomeInstance =new HelloWorldClass($nameEntered);
                    //variable to hold message
                    $message = $welcomeInstance->Welcome();
                    //display
                    echo $message;

                }
                else {
                    # INVALID
                    echo"Invalid input: please enter your and try again";
                }//valid if/else
             }//end if roundtrip
            ?>
        </p>
    </body>
</html>