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


    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['addToCart']))
        {    
            if(isset($_COOKIE['cart_items']))
            {   
               $items=json_decode($_COOKIE['cart_items'],true);
               
               if(isset($items[$_POST['addToCart']]))
               {
                $items[$_POST['addToCart']]+=1;
               }
               else{
                $items[$_POST['addToCart']]=1;
               }
               setcookie("cart_items", json_encode($items), time() + (86400 * 30), "/"); 
            }
            else{
                $items=array();
                setcookie("cart_items", json_encode($items), time() + (86400 * 30), "/");

            }
        }
        
    }
?>



<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link href="shop.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
     <div id="spider" class="headerTiger wrapperTop">
        <div id="navItem1" class="cellZ1 "><a href="/home/home-page.php"><img id="logo" src="/images/logo.png" alt="logo"></a></div>
        <div id="spiderBaby" class="wrapper1 hide">
                
                <div class="items1 hover "><a href="/memberships/memberships.php" class="links"><div class="linksS">Memberships</div></a></div>
                <div class="items1 hover "><a href="/shop/shop.php" class="links"><div class="linksS">Shop</div></a></div>
                 <div class="items1 hover "><a href="/Schedules/Schedules.php" class="links"><div class="linksS">Schedule</div></a></div>
                <div class="items1 hover "><a href="/Trainers/Trainers.php" class="links"><div class="linksS">Trainers</div></a></div>
                <div class="items1 hover "><a href="/mealpage/meal-plans.php" class="links"><div class="linksS">Meal Plans</div></a></div>
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
    
     

 <a href="/shop/cart.php"><img id='cart' src="/images/RedCart.png"></a>
    <div class="main">
        

        <form method="post" action="">
            <fieldset>
                <legend>Supplements</legend>
                <br><br>
            <div class="col-1"></div>
            <div class="col-3 items" id="item1">
                <label for="item1">
                <img class="pic1 pics" src="/images/protein1.jpg"><br>
                <p>BioTech 1Kg Protien Powder </p>
            </label>
            </div>
            <div class="col-1"></div>
            <div class="col-3 items" id="item2">
                <label for="item2">
                <img class="pic2 pics" src="/images/protien2.jpg"><br>
                <p>BioTech 2Kg Protien Powder </p>
            </label>
            </div>
            <div class="col-1"></div>
            <div class="col-3 items" id="item3">
                <label>
                <img class="pic3 pics" src="/images/amino acids.webp"><br>
                <p>BioTech 0.5Kg Amino Acids </p>
            </label>
            </div><br><br>
            <div class="col-1"></div>
            <div id="item1big" class="col-10" style="display: none;">
                <img class="pic1big" src="/images/protein1.jpg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>BioTech 1Kg Protien Powder <br>59.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="1">Add To Cart</button>
                </div>
            </div>
            <div id="item2big" class="col-10" style="display: none;">
                <img class="pic2big" src="/images/protien2.jpg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>BioTech 2Kg Protien Powder <br>109.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="2">Add To Cart</button>
                </div>
            </div>
            <div id="item3big" class="col-10" style="display: none;">
                <img class="pic3big" src="/images/amino acids.webp"><div class="col-1"></div>
                <div class="col-5">
                    <h2>BioTech 0.5Kg Amino Acids <br>19.99</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="3">Add To Cart</button>
                </div>
            </div>
            </fieldset>
            <fieldset>
            <legend>Equipment</legend>
            <div class="col-1"></div>
            <div class="col-3 items" id="item4">
                <label for="item4">
                <img class="pic4 pics" src="/images/dumbells.jpg"><br>
                <p>Adjustable Dumbells (2.25Kg-24Kg)</p>
            </label>
            </div>
            <div class="col-1"></div>
            <div class="col-3 items" id="item5">
                <label>
                <img class="pic5 pics" src="/images/pilates ball.jpg"><br>
                <p>ProBody Pilates Ball(S, M, L, XL)</p>
            </label>
            </div>
            <div class="col-1"></div>
            <div class="col-3 items" id="item6">
                <label>
                <img class="pic6 pics" src="/images/kettleball.jpg"><br>
                <p>Coated KettleBell (2.25Kg-22.5Kg) </p>
            </label>
            </div><div class="col-1"></div><br><div class="col-1"></div>
            <div id="item4big" class="col-10" style="display: none;">
                <img class="pic4big" src="/images/dumbells.jpg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>Adjustable Dumbells (2.25Kg-24Kg) <br>99.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="4"> Add To Cart</button>
                </div>
            </div>
            <div id="item5big" class="col-10" style="display: none;">
                <img class="pic5big" src="/images/pilates ball.jpg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>ProBody Pilates Ball(S, M, L, XL) <br>14.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="5">Add To Cart</button>
                </div>
            </div>
            <div id="item6big" class="col-10" style="display: none;">
                <img class="pic6big" src="/images/kettleball.jpg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>Coated KettleBell (2.25Kg-22.5Kg) <br>19.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="6">Add To Cart</button>
                </div>
            </div>
            <br><br>
            <div class="col-12">
            <div class="col-3 items" id="item7">
                <img class="pic7 pics" src="/images/gloves.jpeg">
                <p>Body Building Gloves(S, M, L, XL) </p>
            </div>
            <div class="col-1"></div>
            <div class="col-3 items" id="item8">
                <label">
                <img class="pic8 pics" src="/images/sportbag.jpg">
                <p>T90 Sport Bag(S, M, L, XL, XXL) </p>
            </label>
            </div>
            </div><br><br><div class="col-1"></div>
            <div id="item7big" class="col-10" style="display: none;">
                <img class="pic7big" src="/images/gloves.jpeg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>Body Building Gloves(S, M, L, XL) <br>9.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit" name="addToCart" value="7">Add To Cart</button>
                </div>
            </div>
            <div id="item8big" class="col-10" style="display: none;">
                <img class="pic8big" src="/images/sportbag.jpg"><div class="col-1"></div>
                <div class="col-5">
                    <h2>T90 Sport Bag(S, M, L, XL, XXL) <br>19.99 JOD</h2>
                    <div class="col-1"></div>
                    <img src="/images/yepyepstar.png"><br><br><br>
                    <button class="picsbtn" method="post" type="submit"  name="addToCart" value="8">Add To Cart</button>
                </div>
            </div>
            </fieldset>
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

    <script>
        $("#item1").click(function(){
            if($("#item2big").display!=="none"){
            $("#item2big").hide("slide");}
            if($("#item3big").display!=="none"){
            $("#item3big").hide("slide");}
            $("#item1big").toggle("slide");
        });

        $("#item2").click(function(){
            if($("#item1big").display!=="none"){
            $("#item1big").hide("slide");}
            if($("#item3big").display!=="none"){
            $("#item3big").hide("slide");}
            $("#item2big").toggle("slide");
        });

        $("#item3").click(function(){
            if($("#item1big").display!=="none"){
            $("#item1big").hide("slide");}
            if($("#item2big").display!=="none"){
            $("#item2big").hide("slide");}
            $("#item3big").toggle("slide");
        });
        $("#item4").click(function(){
            if($("#item5big").display!=="none"){
            $("#item5big").hide("slide");}
            if($("#item6big").display!=="none"){
            $("#item6big").hide("slide");}
            $("#item4big").toggle("slide");
        });

        $("#item5").click(function(){
            if($("#item4big").display!=="none"){
            $("#item4big").hide("slide");}
            if($("#item6big").display!=="none"){
            $("#item6big").hide("slide");}
            $("#item5big").toggle("slide");
        });

        $("#item6").click(function(){
            if($("#item4big").display!=="none"){
            $("#item4big").hide("slide");}
            if($("#item5big").display!=="none"){
            $("#item5big").hide("slide");}
            $("#item6big").toggle("slide");
        });

        $("#item7").click(function(){
            if($("#item8big").display!=="none"){
            $("#item8big").hide("slide");}
            $("#item7big").toggle("slide");
        });

        $("#item8").click(function(){
            if($("#item7big").display!=="none"){
            $("#item7big").hide("slide");}
            $("#item8big").toggle("slide");
        });
        // $(".picsbtn").click(function(event){
        //     event.preventDefault();
        //     alert("Thanks for shopping with us");
        // });
    </script>
</body>
</html>
