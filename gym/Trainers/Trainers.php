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
    <title>Trainers</title>
    <link rel="icon" href="/images/newlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="Trainers.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
                <?php echo $header ?>
            
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
        <div class="wrapper2">
            <div class="cellA1">
                <img src="/images/MustafaBum.png" alt="" id="coach">
            </div>
            <div class="cellA2">
                Meet MustafaBum, your dedicated gym trainer who is passionate about helping you
                achieve your fitness goals. With his extensive knowledge, experience, and unwavering commitment to
                health and wellness, MustafaBum is here to guide and motivate you on your fitness journey. Whether
                you're a beginner looking to start your fitness routine or an experienced athlete seeking to take your
                workouts to the next level, MustafaBum's expertise and personalized approach will ensure that you reach
                your desired results. Get ready to be inspired, challenged, and transformed as MustafaBum empowers you
                to unleash your full potential and create a healthier, stronger version of yourself. Let's embark on
                this exciting fitness adventure together with MustafaBum as your trusted companion, coach, and
                motivator.
            </div>
        </div>

        <div class="wrapper3">
            <div class="cellC1">Customer Review:</div>
            <div class="cellC2"> <img src="/images/yepyepstar.png" id="starx" alt=""></div>
            <div class="cellC3">"I can't thank MustafaBum enough for the incredible transformation he has helped me
                achieve. His
                expertise and personalized training program have pushed me beyond my limits, helping me reach new
                heights in my fitness journey. MustafaBum's dedication, motivation, and unwavering support have been
                instrumental in keeping me focused and motivated. Not only have I seen a significant improvement in my
                strength and endurance, but my overall confidence and mindset have also skyrocketed. MustafaBum truly
                goes above and beyond, tailoring workouts to my specific needs and constantly challenging me to strive
                for greatness. He is not just a trainer; he is a mentor and a friend. I am forever grateful for the
                positive impact he has had on my life. If you're looking for someone who will inspire, guide, and
                transform you, look no further than MustafaBum!"</div>
        </div>

        <div class="wrapper2">
            <div class="cellA1"><img src="/images/ArnoldNayfeh.png" alt="" id="coach"></div>
            <div class="cellA2">Introducing Arnold Nayfeh, your dedicated and dynamic gym trainer who is passionate
                about helping individuals unleash their true potential and achieve remarkable fitness transformations.
                With a wealth of experience and a deep understanding of exercise science, Arnold is committed to guiding
                and motivating you every step of the way on your fitness journey. Whether you're a beginner taking your
                first steps towards a healthier lifestyle or a seasoned fitness enthusiast looking to break through
                plateaus, Arnold's expertise and personalized approach will ensure that you reach your goals and surpass
                them. With Arnold by your side, you can expect a perfect blend of challenging workouts, expert guidance,
                and unwavering support, tailored specifically to your unique needs and aspirations. Get ready to embark
                on a transformative fitness experience and discover the strength, confidence, and vitality that lie
                within you, with Arnold Nayfeh as your trusted trainer and motivator.</div>
        </div>

        <div class="wrapper3">
            <div class="cellC1">Customer Review:</div>
            <div class="cellC2"> <img src="/images/yepyepstar.png" id="starx" alt=""></div>
            <div class="cellC3">"I am incredibly grateful to have had the opportunity to train with Arnold Nayfeh. His
                passion for
                fitness and unwavering dedication to his clients are truly remarkable. Under Arnold's guidance, I have
                achieved results that I never thought were possible. His personalized training program, tailored
                specifically to my goals and abilities, has pushed me to surpass my limits and reach new heights of
                strength and endurance. Arnold's deep knowledge of exercise science and his ability to motivate and
                inspire are unparalleled. He not only focuses on physical training but also provides valuable insights
                on nutrition and overall wellness. Arnold's positive energy and genuine care for his clients have made
                every session enjoyable and rewarding. I am proud of the progress I have made with Arnold as my trainer,
                and I highly recommend him to anyone looking to transform their fitness journey. Arnold Nayfeh is a true
                professional, and I am grateful to have him as my coach and mentor."</div>
        </div>

        <div class="wrapper2">
            <div class="cellA1"><img src="/images/AhmadColeman.png" alt="" id="coach"></div>

            <div class="cellA2">Meet Ahmad Coleman, your dedicated and results-driven gym trainer who is committed to
                helping you unlock your full fitness potential. With his passion for health and wellness, Ahmad is
                equipped with the knowledge and expertise to guide you towards achieving your desired fitness goals.
                Whether you're looking to lose weight, gain strength, or improve overall athleticism, Ahmad's
                personalized approach and attention to detail ensure that your training program is tailored to meet your
                specific needs and aspirations. With Ahmad by your side, you can expect a motivating and supportive
                environment that pushes you beyond your limits, helping you overcome obstacles and reach new levels of
                success. Get ready to be inspired, challenged, and empowered as Ahmad Coleman transforms your fitness
                journey into an exciting adventure towards a healthier, fitter you. Embark on this transformative
                experience and let Ahmad be your trusted coach and guide every step of the way.</div>
        </div>

        <div class="wrapper3">
            <div class="cellC1">Customer Review:</div>
            <div class="cellC2"> <img src="/images/yepyepstar.png" id="starx" alt=""></div>
            <div class="cellC3">"I cannot speak highly enough about Ahmad Coleman and the incredible impact he has had
                on my fitness journey. From the moment I started training with him, Ahmad's passion and expertise were
                evident. He took the time to understand my goals, strengths, and limitations, and crafted a personalized
                training program that pushed me to achieve results I never thought possible. Ahmad's energy and
                enthusiasm are contagious, making every session enjoyable and motivating. He goes above and beyond to
                ensure that I stay motivated and focused, always pushing me to reach new heights. Not only has Ahmad
                helped me transform my physique, but he has also instilled in me a newfound confidence and belief in my
                abilities. His knowledge of proper form and technique has been instrumental in preventing injuries and
                maximizing my workouts. Ahmad's dedication to his clients is unmatched, and I am grateful to have him as
                my trainer and mentor. If you are looking for someone who will support, motivate, and challenge you to
                become the best version of yourself, Ahmad Coleman is the trainer for you."</div>
        </div>
    </div>


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