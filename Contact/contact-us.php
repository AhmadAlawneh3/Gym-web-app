<?php 
    session_start();
    include 'contact-DB.php';
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="conctact.css" rel="stylesheet" type="text/css">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="/images/tigersFavicon.png" type="image/x-icon">
    
    
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
   <?php if(isset($_GET['submited'])){echo "<h1>Message sent successfully. Thank you for conatacting us!</h1>";}?>
    
    <h1>Contact Us</h1>
   <div class="container2">
   
        <form action="" method="post" >
            <label for="name">
                Name:
                <input type="text" name="name" id="name" placeholder="Full Name"  value="<?php if (isset($name)){echo $name;}?>" >
            </label>
            <?php if (isset($nameErr)){echo $nameErr;}?>
            <br>
            

            <label for="phoneNUM">Phone Number:
                <input type="tel" name="phoneNUM" id="phone" placeholder="0791234567"  min="10" value="<?php if (isset($phone)){echo $phone;}?>">  
            </label>
            <?php if (isset($phoneErr)){echo $phoneErr;}?>
            <br>

            <label for="email">Email:
                <input type="email" name="email" id="email"  placeholder="Email Address" value="<?php if (isset($email)){echo $email;}?>">
            </label>
            <?php if (isset($emailErr)){echo $emailErr;}?>
            <br>

            <label for="message">Message:</label>
            <br>
            <textarea name="message" id="message" cols="30" rows="10"  placeholder="Message"></textarea value="<?php if (isset($C)){echo $message;}?>">
            <br>
            <?php if (isset($messageErr)){echo $messageErr;}?>
            <br>

            <button type="submit" value="Submit" name="Submit">Send</button>
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

