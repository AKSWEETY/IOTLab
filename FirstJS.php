<!doctype html>
<html>
    <head>
        <!--created by Kadari--->
        <title>JavaScript 1</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>MyFirst JavaScript</h1>
        <script type="text/javascript">
            //created by kadari
            //bring up a prompt for users name;
            var name=window.prompt("please enter your name");
            if(name!=""){
                document.writeln("<p>Hello" + name+ "! Welcome to JavaScript</p>");
            }
            else{
                document.writeln("<p>Hello captain Nemo! oh so sorry you did not share your name! Welcome to JavaScript!!</p>");
            }//if/else validation
            </script>
            <p> You can also echo script tag and all the code (javascript) from inside php delimiters as well!
                <?php
                  echo('<script type="text/javascript"> window.alert("Today is: \n"+ Date());</script>');
                  echo('<script type="text/javascript"> document.writeln("<p> Today is:" +Date()+"</p>");</script>');

                ?>
            </p>
            <p> Some more cocktail of PHP & JAVASCRIPT for you:
                <?php echo "<script type='text/javascript'>";?>
                    document.writeln("<p> javascript practice time: it is now or next semester! so it better be now! let the fun begin!!<p>");
                 <?php echo"</script>";?>
            </p>
    </body>
</html>