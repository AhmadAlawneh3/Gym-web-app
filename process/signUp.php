<?php  
  session_start();
  include "login-check.php";

  include"sign-up-DB.php";
?>

  
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup-style.css">
    <link rel="shortcut icon" href="/images/tigersFavicon.png" type="image/x-icon">
  </head>
  
  <body>
    <div id="spider" class="headerTiger wrapperTop">
        <div id="navItem1" class="cellZ1 "><a href=""><img id="logo" src="/images/logo.png" alt="logo"></a></div>
        <div id="spiderBaby" class="wrapper1 hide">

                <div class="items hover "><a href="/memberships/memberships.php" class="links"><div class="linksS">Memberships</div></a></div>
                <div class="items hover "><a href="/shop/shop.php" class="links"><div class="linksS">Shop</div></a></div>
                 <div class="items hover "><a href="/Schedules/Schedules.php" class="links"><div class="linksS">Schedule</div></a></div>
                <div class="items hover "><a href="/Trainers/Trainers.php" class="links"><div class="linksS">Trainers</div></a></div>
                <div class="items hover "><a href="/mealpage/meal-plans.php" class="links"><div class="linksS">Meal Plans</div></a></div>
                <div class='sign-up hover1'><a href='/process/signUp.php' class='links'><div class='linksS'>Sign up</div></a></div>
                <div class='log-in hover1 '><a href='/process/login.php' class='links'><div class='linksS'>Log in</div></a></div>

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
    
    <h1>Sign Up</h1>
    <div class="container2">
        <form action="" method="post">
        <label for="fname">First Name:
            <input type="text" name="fname" id="fname" placeholder="First name"  value="<?php if (isset($fname)){echo $fname;}?>"></label>
            <?php if (isset($fnameErr)){echo $fnameErr;}?> <br>

        <label for="fname">Middle Name:<input type="text" name="mname" id="mname" placeholder="Middle name"  value="<?php if (isset($mname)){echo $mname;}?>"></label> <?php if (isset($mnameErr)){echo $mnameErr;}?><br>

        <label for="lname">Last Name:<input type="text" name="lname" id="lname" placeholder="Last name"  value="<?php if (isset($lname)){echo $lname;}?>"></label> <?php if (isset($lnameErr)){echo $lnameErr;}?><br>

        <label for="username">Username:<input type="text" name="username" id="username" placeholder="Username"  value="<?php if (isset($username)){echo $username;}?>"></label><?php if (isset($usernameErr)){echo $usernameErr;}?> <br>

        <label for="gender">Gender:</label>
        <input type="radio" id="female" name="gender" value="Female"  <?php if (isset($gender) && $gender=="f") echo "checked";?>>
		    <label for="female">Female</label>
        <input type="radio" name="gender" id="male" value="Male"  <?php if (isset($gender) && $gender=="m") echo "checked";?>>
        <label for="male">Male</label><br><?php if (isset($genderErr)){echo $genderErr;}?><br>

        <label for="DOB">Date Of Birth:<input type="date" name="DOB" id="DOB"  value="<?php if (isset($DOB)){echo $DOB;}?>" ></label> <?php if (isset($DOBErr)){echo $DOBErr;}?> <br>

        <label for="Phone">Phone:<input type="tel" name="phone" id="phone" placeholder="Phone number"  value="<?php if (isset($phone)){echo $phone;}?>"></label><?php if (isset($phoneErr)){echo $phoneErr;}?> <br>

        <label for="email">Email:<input type="email" name="email" id="email" placeholder="Email address"  value="<?php if (isset($email)){echo $email;}?>"></label><?php if (isset($emailErr)){echo $emailErr;}?> <br>

        <label for="password">Password: <input type="password" name="password" id="password" placeholder="Password" ></label><?php if (isset($passErr)){echo $passErr;}?><br>

        <button type="submit" name="Submit" value="Submit">Sign up!</button>

        <div class="other-color">Already a member?<a href="login.php" class="when-hover"> Log in.</a> </div>
    </form>
    </div>
    
<div class="col-12 empty"></div>
    <div class="footer">
        <div class="col-1"></div>
        <div class="col-5">
            <h4>Contact Us</h4>
            <p>
                Address: Jordan, Amman, Jubaiha
                <br>
                Tel: <a href="tel:00962123456789" target="_blank" class="when-hover">00 962 1 2345 67 89</a> 
                <br>
                Send us a message <a href="/Contact/contact-us.php" target="_blank" class="when-hover">here</a>!                <br>         
                Check out our page on <a href="https://www.instagram.com/" target="_blank" class="when-hover">Instagram</a>!
                

            </p>
        </div>
        <div class="col-2">
            <h4>Our Branches</h4>
            <p>Um Uthaina 
                <br>
                Jubaiha 
                <br>
                Khalda 
                <br>
                Gardens
            </p>
        </div>
        <div class="col-3">
            <h4>Our Founders</h4>
            <p>
                Aya Salman
                <br>
                Ahmad Alawneh
                <br>
                Abdulrahman Nayfeh
                <br>
                Mustafa Steitieh
            </p>
        </div>
        <div class="col-1"></div>
        <hr>
        <div class="col-12">Copyrights &copy;</div>
    </div>
  </body>
</html> 