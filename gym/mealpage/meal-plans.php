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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meal-plans.css" type="text/css">
    <title>Meal Plans</title>
    <link rel="shortcut icon" href="/images/tigersFavicon.png" type="image/x-icon">

    
</head>
<body>
     <div id="spider" class="headerTiger wrapperTop">
        <div id="navItem1" class="cellZ1 "><a href="/home/home-page.php"><img id="logo" src="/images/logo.png" alt="logo"></a></div>
        <div id="spiderBaby" class="wrapper1 hide">
                
                <div class="items1 hover "><a href="/memberships/memberships.php" class="links"><div class="linksS">Memberships</div></a></div>
                <div class="items1 hover "><a href="/shop/shop.php" class="links"><div class="linksS">Shop</div></a></div>
                 <div class="items1 hover "><a href="/Schedules/Schedules.php" class="links"><div class="linksS">Schedule</div></a></div>
                <div class="items1   hover "><a href="/Trainers/Trainers.php" class="links"><div class="linksS">Trainers</div></a></div>
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

    
    <div class="main">

        <div class="main2">
            <div class="col-1"></div>
            <div class="col-4 meal1">
                <div class="meal-name">
                    <img src="/images/meal1.jpeg" alt="Meal 1">
                    <h3>Low-Cal Lime & Chilli Turkey Burgers</h3>
                </div>
                <div class="meal-info">
                    <ul>
                        <li>1 tsp coconut oil</li>
                        <li>50 g rolled oats</li>
                        <li>40 g turkey mince (2-7% fat mince)</li>
                        <li>1/2 tsp. sea salt & black pepper</li>
                        <li>1/2 red chilli</li>
                        <li>1 tsp. garlic paste (alternatively, you can use 1 minced clove)</li>
                        <li>1/2 small red onion</li>
                        <li>1/2 lime (juice and zest)</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-2"></div>

            <div class="col-4">
                <div class="meal-name">
                    <img src="/images/meal2.jpeg" alt="Meal 2">
                    <h3>Speedy Harissa Chicken & Tabbouleh</h3>
                </div>
                <div class="meal-info">
                    <ul>
                        <li>50 g harissa paste</li>
                        <li>1 tsp extra virgin olive oil</li>
                        <li>1 pinch seal salt</li>
                        <li>3 x chicken breast (try skin-on for extra flavour)</li>
                        <li>180 g bulgar wheat or couscous (dry weight)</li>
                        <li>40 g parsley (stems and leaves)</li>
                        <li>20 g mint leaves</li>
                        <li>6-8 x spring onions</li>
                        <li>1/2 a cucumber</li>
                        <li>4 x tomatoes</li>
                        <li>6 tbsp Greek yoghurt</li>
                        <li>1/2 a lemon (juice and zest)</li>
                        <li>1 clove of garlic (minced)</li>
                        <li>1 pinch of sea salt</li>
                        <li>1 handful of pomegranate seeds (optional)</li>
                    </ul>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
          
        <div class="main2">
            <div class="col-1"></div>
            <div class="col-4">

                <div class="meal-name">
                    <img src="/images/meal3.jpeg" alt="Meal 3">
                    <h3>One-Tray Cashew Chicken</h3>
                </div>
                <div class="meal-info">
                    <ul>
                        <li>3 tbsp. Cashew Butter</li>
                        <li>2 tbsp. soy sauce</li>
                        <li>2 tbsp. Maple or Agave Syrup</li>
                        <li>2 cloves garlic</li>
                        <li>1 tsp. Chinese five spice</li>
                        <li>4 chicken breasts (diced)</li>
                        <li>1 head broccoli (cut into florets)</li>
                        <li>40g cashew nuts</li>
                        <li>2 red chillies (diced)</li>
                        <li>Handful fresh coriander</li>
                        <li>300g basmati rice (cooked)</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-2"></div>

            <div class="col-4">
                <div class="meal-name">
                    <img src="/images/meal4.jpeg" alt="Meal 4">
                    <h3>Low-Carb Loaf Tin Lasagne</h3>
                </div>
                <div class="meal-info">
                    <ul>
                        <li>1 tsp. Coconut Oil</li>
                        <li>1 white onion, coarsely chopped (or 1 tbsp. onion powder)</li>
                        <li>2 cloves garlic, finely chopped (or 1 tsp. garlic powder)</li>
                        <li>1 tbsp. dried oregano</li>
                        <li>350g turkey mince</li>
                        <li>600g chopped tomatoes or tomato passata</li>
                        <li>300g lasagne sheets</li>
                        <li>1 courgette</li>
                        <li>1 tsp. sea salt and black pepper</li>
                        <li>400g cottage cheese</li>
                        <li>3 egg whites</li>
                        <li>100g low-fat cheese (grated)</li>
                    </ul>
                </div>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="main2">
            <div class="col-1"></div>
            <div class="col-4 ">
                <div class="meal-name">
                    <img src="/images/meal5.jpeg" alt="Meal 5">
                    <h3>Harissa Chicken & Moroccan Couscous</h3>
                </div>
                <div class="meal-info">
                    <ul>
                        <li>500 g boneless, skinless chicken thighs</li>
                        <li>1 tbsp. extra virgin olive oil</li>
                        <li>2 tbsp. harissa paste</li>
                        <li>½ lemon (juiced)</li>
                        <li>1 onion (finely chopped)</li>
                        <li>3 garlic cloves (crushed)</li>
                        <li>2 tbsp. coconut oil</li>
                        <li>1 tsp. cumin</li>
                        <li>1 tsp. smoked paprika</li>
                        <li>350 g couscous</li>
                        <li>1 vegetable stock cube</li>
                        <li>1 litre boiled water</li>
                        <li>1 bunch fresh parsley (finely chopped)</li>
                        <li>1 tsp. chilli flakes</li>
                        <li>40 g pine nuts</li>
                        <li>50 g raisins</li>
                        <li>Serving suggestions: cherry tomatoes, rocket, red pepper</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-2"></div>

            <div class="col-4">
                <div class="meal-name">
                    <img src="/images/meal6.jpeg" alt="Meal 6">
                    <h3>Buffalo Chicken & Pasta Salad</h3>
                </div>
                <div class="meal-info">
                    <p>For the pasta:</p>
                    <ul>
                        <li>160g cooked pasta</li>
                        <li>3 breasts cooked chicken</li>
                        <li>2 stalks celery</li>
                        <li>Handful cherry tomatoes</li>
                        <li>1 yellow pepper</li>
                        <li>2 tbsp. reduced-fat ranch dressing</li>
                        <li>Large handful mixed leaves</li>
                    </ul>
                    <p>For the buffalo sauce:</p>
                    <ul>
                        <li>175ml peri-peri sauce</li>
                        <li>½ tsp. garlic powder</li>
                        <li>4 tbsp. reduced-fat butter or margarine</li>
                        <li>Pinch salt</li>
                    </ul>
                </div>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="main2">
            <div class="col-1"></div>
            <div class="col-4">
                <div class="meal-name">
                    <img src="/images/meal7.jpeg" alt="Meal 7">
                    <h3>Asian Peanut Butter Sesame Chicken</h3>
                </div>
                <div class="meal-info">
                    <p>For the chicken:</p>
                    <ul>
                        <li>5 tbsp. Peanut Butter</li>
                        <li>50ml orange juice</li>
                        <li>3 tbsp. Sugar-Free Syrup (Maple Flavour)</li>
                        <li>3 tbsp. soy sauce</li>
                        <li>1 thumb ginger (grated)</li>
                        <li>3 chicken breasts</li>
                    </ul>
                    <p>For the salad:</p>
                    <ul>
                        <li>2 cucumbers (spiralised or thinly sliced)</li>
                        <li>2 carrots (spiralised or thinly sliced)</li>
                    </ul>
                    <p>Salad dressing:</p>
                    <ul>
                        <li>2 tbsp. Sugar-Free Syrup (Maple Flavour) or Maple Syrup</li>
                        <li>4 tbsp. soy sauce</li>
                        <li>2 tbsp. sesame oil (if you do not have this, substitute for your preferred oil or go without to reduce fat content)
                        </li>
                    </ul>
                    <p>Serve with:</p>
                    <ul>
                        <li>30g (dry weight) brown/basmati rice per meal</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-2"></div>

            <div class="col-4">
                <div class="meal-name">
                    <img src="/images/meal8.jpeg" alt="Meal 8">
                    <h3>Bangin' Barbecue Chicken & Rice</h3>
                </div>
                <div class="meal-info">
                    <ul>
                        <li>1 tbsp. Coconut Oil</li>
                        <li>450g cooked white rice</li>
                        <li>600g chicken breast</li>
                        <li>6 handfuls spinach</li>
                        <li>75g sweetcorn</li>
                        <li>3 tbsp. barbecue sauce</li>
                        <li>1 tsp. sweet paprika</li>
                        <li>9 cherry tomatoes</li>
                    </ul>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
            
    </div>

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



    
    <!-- <script>
        function handleViewportChange() {
            var viewportWidth = window.innerWidth;

            if (viewportWidth <= 768 ) {
            var divToDelete = document.getElementById('delete');
            divToDelete.parentNode.removeChild(divToDelete);
            }

            else {
                var addDiv = createElement
            }
        }

        var mediaQuery = window.matchMedia('(max-width: 768px)');
        mediaQuery.addListener(handleViewportChange);
        handleViewportChange(mediaQuery); 
    </script> -->

</body>
</html>