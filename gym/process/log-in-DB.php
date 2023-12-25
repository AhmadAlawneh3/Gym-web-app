<?php
$err="";
if (isset($_POST['Submit']))
{   //connect to the DB
   include 'conn.php';
    //if request method was post then start the checking process
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    // check if username and password fields are filed 
        if (!empty($_POST['username']) and !empty($_POST["password"]) )
        {
            $username=$_POST["username"];
            $password = md5($_POST["password"]);
            $sql= "SELECT * FROM users where username='$username' and password='$password' ";
            //Check if username exists in the database 
            if (mysqli_num_rows(mysqli_query($conn, $sql))==1) 
            {
                // session_start();
                //fetch user data from database 
                $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from users where username='$username'"));
                //set session variables that will be used later in other pages to display data
                $_SESSION['loggedin'] = true;
                $_SESSION['id']=$row['id'];
                $_SESSION['username'] = $username;
                
                //check if user is an admin 
                if ($row['is_admin']) 
                {   //add to the session that the user is an admin 
                    $_SESSION['is_admin'] = true;
                    //redirect to admin page 
                    header("Location: /admin/index.php");
                    exit;
                }
                else
                {   //add to the session that the user is not an admin 
                    $_SESSION['is_admin'] = false;
                    //redirect to member page 
                    if(isset($_SESSION['url']))
                    {   $url=$_SESSION['url'];
                        header("Location: $url");
                    }
                    else{
                        header("Location: /member/index.php");
                    }
                    exit;
                }

                } else {
                    //User does not exist in the database or the username and password is worng
                    $err='<div class="error">Invalid username or password</div>';
                    }
                    // mysqli_query($conn,"insert into sessions values($_SESSION[id],'$_COOKIE[PHPSESSID]')");
        }
        else
        {
        //username and password fields are not filed send this error message 
         $err='<div class="error">Username and password can not be left blank.</div>';
        }

    }

    //close connection
    mysqli_close($conn);
}
?>

