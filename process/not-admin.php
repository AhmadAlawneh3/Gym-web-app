<?php include"log-In-DB.php";
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $header="
        
        <div class='sign-up hover1 '><a href='/member/' class='links'><div class='linksS'>Profile</div></a></div>
        <div class='sign-up hover1 '><a href='/process/logout.php' class='links'><div class='linksS'>Log out </div></a></div>
        ";
        
        }
        else{
            $header="<div class='sign-up hover1'><a href='/process/signUp.php' class='links'><div class='linksS'>Sign up</div></a></div>
                <div class='log-in hover1 '><a href='/process/login.php' class='links'><div class='linksS'>Log in</div></a></div>";
        }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>NOT AN ADMIN!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="signup-style.css"> -->
    <link rel="stylesheet" href="/process/signup-style.css">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
  </head>
  
  <body>
  <div id="spider" class="headerTiger wrapperTop">
        <div id="navItem1" class="cellZ1 "><a href="/home/home-page.php"><img id="logo" src="/images/logo.png" alt="logo"></a></div>
        <div id="spiderBaby" class="wrapper1 hide">

                <div class="items hover "><a href="/memberships/memberships.php" class="links"><div class="linksS">Memberships</div></a></div>
                <div class="items hover "><a href="/shop/shop.php" class="links"><div class="linksS">Shop</div></a></div>
                 <div class="items hover "><a href="/Schedules/Schedules.php" class="links"><div class="linksS">Schedule</div></a></div>
                <div class="items hover "><a href="/Trainers/Trainers.php" class="links"><div class="linksS">Trainers</div></a></div>
                <div class="items hover "><a href="/mealpage/meal-plans.php" class="links"><div class="linksS">Meal Plans</div></a></div>
                <?php echo $header; ?>

        </div>
        <div id="buttonArea">
            <button id="toggle">
                <div class="container" id="goat">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
        </div>
    </div>
    <script>
        const navbarLinks = document.getElementById('spiderBaby');
        const tiger = document.getElementById('toggle');

        tiger.addEventListener('click', () => {
            navbarLinks.classList.toggle('hide');
            let x = document.getElementById("goat");
            x.classList.toggle("change");

        });
    </script>
    <h1>YOU ARE NOT AN ADMIN!</h1>
    <h2>Log In</h2>
    <div class="container2">
      <form action="" method="post">
        <label for="username">Username:<input type="text" name="username" id="username" placeholder="username"></label> <br>
        <label for="password">Password: <input type="password" name="password" id="password"  placeholder="password"></label><br>
        <?php echo "$err"?>
        <button type="submit" name="Submit" value="Submit">Log In</button>
        <div>New member? <a href="signUp.php">Sign Up!</a></div>
      </div>
    </form>
  </body>
</html>