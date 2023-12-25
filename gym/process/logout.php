<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        unset($_SESSION['loggedin']);
        unset($_SESSION['username']);
        unset($_SESSION['id']);
        header("Location: /home/home-page.php");
        session_destroy();
        
        exit();

  //isset($_GET['logout']) 
    }
?>