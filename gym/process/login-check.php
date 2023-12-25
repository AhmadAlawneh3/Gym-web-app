<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header("Location: /home/home-page.php");
  return;
  exit();
}
?>