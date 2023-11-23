 
<?php session_start();
    include "admin-DB.php";
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN PAGE</title>
        <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="admin-style.css">
    </head>
    <body>
        <h1>ADMIN PORTAL</h1>
        <header>
                <nav>
                    <a href="/home/home-page.php">HOME</a>
                    <a href="/process/login.php">LOG IN</a>
                    <a href="/process/signUp.php">SIGN UP</a>
                   
                    <form method='post' action='/process/logout.php'><button type='submit' class='logout' method='post' name='logout' value='true'>LOG OUT</button> </form>
                </nav>
        </header>
        <br>
        <?php echo $output?>
        <fieldset>
            <legend>Make an admin</legend>
            <form action="" method="post">
                <label for="id">ID: <input type="number" name="id" id="id"></label>
                <br>
                <label for="admin">Admin:
                    <input type="radio" name="admin" id="true" value="1"><label for="true">!!YES!!</label>
                    <input type="radio" name="admin" id="false" value="0"><label for="false">NO</label><br><br>
                </label>
                <button type="submit" name="Submit" value="Submit">CHANGE</button>
            </form>
        </fieldset>

        <fieldset>
            <legend>Delete User</legend>
            <form action="" method="post">
                <label for="id">ID: <input type="number" name="id" id="id"></label>
                <br><br>
                
                <button type="submit" name="delete" value="delete">DELETE</button>
            </form>
        </fieldset>
    </body>
</html> 