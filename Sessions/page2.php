<?php session_start();
if (isset ($_SESSION['page2visits'])) ++$_SESSION['page2visits']; else $_SESSION['page2visits']=1;
?>
<!doctype html>
<html>
    <head>
        <!--created by Kadari-->
        <title>Sessions</title>
        <meta charset ="UTF-8">

    </head>
    <body>
        <h1> PHP Session-you are on page2 </h1>
        <form action="page1.php" method='POST'>
        <p>
            <?php
             if(!empty($_SESSION['name'])) echo"<p>SEssion name: " .$_SESSION['name']."</p>";
             if(!empty($_SESSION['name'])){
                echo "Message from Page 1:" .$_SESSION["page1Msg"];
             }
             if(!empty($_SESSION['page2Msg'])){
                echo ("<p> Page 2 message is:" .$_SESSION["page2Msg"]."</p>");
             }else{
                $_SESSION["page2Msg"]="hello from page2 ";
                echo"<p>FRist Visit to page 2 yet .Message added now.</p>";
             }
             echo"<p> you visited this page" .$_SESSION['page2visits']. "times</p>";
             if(!empty($_SESSION['page3Msg'])){
                echo ("<p>Message from Page 2:" .$_SESSION["page2Msg"]."</p>");
            }else{
               
               echo"<p>No message from page 3 Yet.</p>";
            }
                
            ?>
            <p> <input type="submit" value="Go to Page 1"></p>
                <p><button><a href ="page3.php" style='text-decoration:none'> Go to Page 3
                </a></buttton></p>
        </form>

    </body>


</html>