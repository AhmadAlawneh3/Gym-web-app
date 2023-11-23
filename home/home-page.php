<?php
    session_start();
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
    <link href="home-page.css" rel="stylesheet" type="text/css">
    <title>Tigers' Gym</title>
    <link rel="shortcut icon" href="/images/tigersFavicon.png" type="image/x-icon">
    <script src="carousel.js"></script>
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
    <!-- ---------------------- -->

    

    <!-- ---------------------- -->

    <!-- ---------------------- -->

    <body>
        

        <h1 class="motto">Fast, lean and fit.</h1>

        <!-- Flickity HTML init -->
        <div class="carousel"
        data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
        <img src="/images/img1.webp" alt="img 1" />
        <img src="/images/img2.webp" alt="img 2" />
        <img src="/images/img3.jpeg" alt="img 3" />
        <img src="/images/img4.jpeg" alt="img 4" />
        <img src="/images/img5.jpeg" alt="img 5" />
        <img src="/images/img6.jpeg" alt="img 6" />
        <img src="/images/img8.jpeg" alt="img 8" />
        </div>

        <div class="main">
            <h2>This gym offers a variety of fitness equipments and classes, as well as personal training services. It
                caters to people of all fitness levels and ages, providing a convenient and safe environment to improve
                physical health with many sports and sections to choose from.
              
              <br><br>

              Keep track of your diet with our <a href="/mealpage/meal-plans.php">meal plans</a> and check our <a href="/shop/shop.php">shop</a> for supplies and equipments you might need while training at Tigers' Gym.

              </h2>

                <h3>Want to know more about our gym? Check out our <a href="/memberships/memberships.php">memberships</a>! You can also check our <a href="" >schedules</a> to see if anything fits you!</h3>

                <h3>Read about our <a href="">trainers</a> and choose who you want to train with.</h3>
        </div>

        <!-- <div class="main">
            <div class="desc">
                <p class="desc-p">This gym offers a variety of fitness equipments and classes, as well as personal training services. It
                    caters
                    to people of all fitness levels and ages, providing a convenient and safe environment to improve
                    physical
                    health. </p>
                    <br>
                    <p class="desc-p">Want to know more about our gym? Check out our <a href="/memberships/memberships.html" class="when-hover">memberships</a>!</p> 
            </div>
        </div> -->
        

    

    <div class="col-12 empty"></div>

    <footer>
    <div class="footer">
        <div class="col-1"></div>
        <div class="col-5">
            <h4>Contact Us</h4>
            <p>
                Address: Jordan, Amman, Jubaiha
                <br>
                Tel: <a href="tel:00962123456789" target="_blank" class="when-hover">00 962 1 2345 67 89</a> 
                <br>
                Send us a message <a href="/Contact/contact-us.php" target="_blank" class="when-hover">here</a>!
                <br>
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
    </footer>   
</body>

</html>

