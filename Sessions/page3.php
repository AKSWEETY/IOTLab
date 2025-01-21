<?php session_start();

if (isset ($_SESSION['page3visits'])) ++$_SESSION['page3visits']; else $_SESSION['page3visits']=1;
?>
<!doctype html>
<html>
<head>
        <!--created by Kadari-->
        <title>Sessions</title>
        <meta charset ="UTF-8">

    </head>
    <body>
        <h1> PHP Session-you are on page 3</h1>
        <form action="page1.php" value="POST">
            <p>
                <?php
                echo "<p> Session autoglobal variable is accessible on page 3 as well:</p>";
                if(!empty($_SESSION)){
                    echo"<p> Session Name: " .$_SESSION['name']."</p>";
                    if(!empty($_SESSION['name'])){
                        echo" Message from page 1: " .$_SESSION["page1Msg"];
                    }
                    if(!empty($_SESSION['page2Msg'])){
                        echo ("<p> Page 2 message is:" .$_SESSION["page2Msg"]."</p>");
                    }
                    if(!empty($_SESSION['page3Msg'])){
                        echo ("<p> Page 3 message is:" .$_SESSION["page3Msg"]."</p>");
                    }
                    else{
                        $_SESSION["page3Msg"]="hello from page3 ";
                echo"<p>Frist Visit to page 3 yet .Message added now.</p>";
                    }
                    echo"<p> You visited this page ". $_SESSION['page3visits']."times</p>";
                }
                ?>
                <p> <input type="submit" value="Go to Page 1"></p>
                <p><button><a href ="page2.php" style='text-decoration:none'> Go to Page 2
                </a></buttton></p>
        </form>
    </body>

</html>