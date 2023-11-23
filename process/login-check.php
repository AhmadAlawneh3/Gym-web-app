<!-- CHECK IF USER IS LOGGED IN WHEN TRYING TO ACCESS LOGIN AND SIGN UP PAGES -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header("Location: /home/home-page.php");
  return;
  exit();
}
?>