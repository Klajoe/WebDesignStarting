<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In-Class-Activity-4</title>
</head>
<body>
    <h1>Preview</h1>
    <?php

        
        if( $_GET['name'] != null)
        {
            echo $_GET['name']."<br>";
        }
        else
        {
            echo "You have to enter a name <br>";
        }

        
        if( $_GET['username'] != null)
        {
            echo $_GET['username']."<br>";   
        }
        else
        {
            echo "You have to enter a username <br>";
        }

        if( $_GET['password'] != null)
        {
            echo $_GET['password']."<br>";
        }
        else
        {
            echo "You have to enter a password <br>";
        }

        if( $_GET['address'] != null)
        {
            echo $_GET['address']."<br>";
        }
        else
        {
            echo "You have to enter a address<br>";
        }

        if( $_GET['countries'] != "none" )
        {
            echo $_GET['countries']."<br>";
        }
        else
        {
            echo "You have to enter a country <br>";
        }

        if($_GET['zip'] != null)
        {
            echo $_GET['zip']."<br>";
        }
        else
        {
            echo "You have to enter a zip code <br>";   
        }

        if($_GET['email'] != null)
        {
            echo $_GET['email']."<br>";
        }
        else
        {
            echo "You have to enter a email <br>";
        }

        if(empty($_GET['sex']))
        {
            echo "You have to enter a sex<br>";
        }
        else
        {
            echo $_GET['sex']."<br>";
        }
        
        if(empty($_GET['languages']))
        {
            echo "You have to select a language <br>";
        }
        else
        {
            foreach($_GET['languages'] as $item)
            {
                echo $item . " ";
            }
            echo "<br>";
        }

        if($_GET['about'] != null)
        {
            echo $_GET['about']."<br>";
        }
        else
        {
            echo "You have to enter a about part<br>";
        }
    ?>
</body>
</html>



