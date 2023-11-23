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
    <title>Tigers' Gym</title>
    <link rel="icon" href="/images/newlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="schedules.css">
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
        <h2>How many days a week do you wanna workout?</h2>

        <div class="wrapperA wrappers">
            <h1>1 day</h1>
            <button class="buttons A"><i class="arrow" id="XA1"></i><i class="arrow up" style="display: none;" id="XA2"></i></button>
        </div>
        <div class="wrapperA1 hide wrappers1" id="wrapper1">
            <h1 >Full Body</h1>
            <button class="buttons A1"><i class="arrow" id="XAH1"></i><i class="arrow up" style="display: none;" id="XAH2"></i></button>
            <div class="wrapperAH hide tables">

                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2"> Day 1</th>
                    </tr>
                    <tr>
                        <td>Bench-press</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Pulldowns</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td>5 sets of 5-7 reps</td>
                    </tr>
                    <tr>
                        <td>Miletary Press</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Tricep Pushdown</td>
                        <td>3 sets of 20 reps</td>
                    </tr>
                    <tr>
                        <td>Hammer Curls</td>
                        <td>3 sets of 12 reps</td>
                    </tr>
                </table>
            </div>
        </div>
       
        <div class="wrapperB wrappers">
            <h1>2 days</h1>
            <button class="buttons B"><i class="arrow" id="XB1"></i><i class="arrow up" style="display: none;" id="XB2"></i></button>
        </div>
        <div class="wrapperB1 hide wrappers1">
            <h1 >Upper-Lower</h1>
            <button class="buttons B1"><i class="arrow" id="XBH1"></i><i class="arrow up" style="display: none;" id="XBH2"></i></button>
            <div class="wrapperBH hide tables">

                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 1 (Upper)</th>
                    </tr>
                    <tr>
                        <td>Bench-press</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Pulldowns</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Miletary Press</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Tricep Pushdown</td>
                        <td>3 sets of 20 reps</td>
                    </tr>
                    <tr>
                        <td>Hammer Curls</td>
                        <td>3 sets of 12 reps</td>
                    </tr>
                </table>
    
    
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 2 (Lower)</th>
                    </tr>
                    <tr>
                        <td>Squat</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hack Squat</td>
                        <td>3 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Seated Calf Raises</td>
                        <td>4 sets of 30 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Romanian Deadlift</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                </table>
    
            </div>
        </div>
       
        <div class="wrapperC wrappers">
            <h1>3 days</h1>
            <button class="buttons C"><i class="arrow" id="XC1"></i><i class="arrow up" style="display: none;" id="XC2"></i></button>
        </div>
        <div class="wrapperC1 hide wrappers1">
            <h1 >Push-Pull-Legs</h1>
            <button class="buttons C1"><i class="arrow" id="XCH11"></i><i class="arrow up" style="display: none;" id="XCH12"></i></button>
            <div class="wrapperCH1 hide tables">
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 1 (Push)</th>
                    </tr>
                    <tr>
                        <td>Incline Bench Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Dumbbell Over Head Press</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Superset Chest Fly x Tricep Extension</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Raises</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 2 (Pull)</th>
                    </tr>
                    <tr>
                        <td>Lateral Pull Down</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Bent Over Rows</td>
                        <td>4 sets of 10-15 reps</td>
                    </tr>
                    <tr>
                        <td>Slight incline Seated Dumbbell Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>EZ Bar Curls</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 3 (Legs)</th>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td>5 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Romanian Deadlift</td>
                        <td>6 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Standing Calf Raises</td>
                        <td>4 sets of 20 reps</td>
                    </tr>
                </table>
            </div>
            <h1 >Arnold Split</h1>
            <button class="buttons C2"><i class="arrow" id="XCH21"></i><i class="arrow up" style="display: none;" id="XCH22"></i></button>
            <div class="wrapperCH2 hide tables">
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 1 (Chest & Back)</th>
                    </tr>
                    <tr>
                        <td>Bench Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Dumbbell Pullover</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Bent Over Rows</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Deadlift</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 2 (Shoulders & Arms)</th>
                    </tr>
                    <tr>
                        <td>Miletary Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Close Grip Bench Press</td>
                        <td>4 sets of 10-15 reps</td>
                    </tr>
                    <tr>
                        <td> Hammer Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Raises</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 3 (Legs)</th>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td>5 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Lunges</td>
                        <td>6 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Standing Calf Raises</td>
                        <td>4 sets of 20 reps</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="wrapperD wrappers">
            <h1>4 Days</h1>
            <button class="buttons D"><i class="arrow" id="XD1"></i><i class="arrow up" style="display: none;" id="XD2"></i></button>
        </div>
        <div class="wrapperD1 hide wrappers1">
            <h1 >Bro Split</h1>
            <button class="buttons D1"><i class="arrow" id="XDH1"></i><i class="arrow up" style="display: none;" id="XDH2"></i></button>
            <div class="wrapperDH hide tables">
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 1 (Chest & Triceps)</th>
                    </tr>
                    <tr>
                        <td>Bench Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Dumbbell Fly</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Tricep Pushdown</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Overhead Cable Extensions</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 3 (Back & Biceps)</th>
                    </tr>
                    <tr>
                        <td>Cable Row</td>
                        <td>4 sets of 5-10 reps</td>
                    </tr>
                    <tr>
                        <td>Barbell Row</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Back Extensions</td>
                        <td>5 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Barbell Curls</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 3 (Shoulders & Abs)</th>
                    </tr>
                    <tr>
                        <td>Arnold Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Raises</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Cable Crunch</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Reverse Machine Fly</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 4 (Legs)</th>
                    </tr>
                    <tr>
                        <td>Squat</td>
                        <td>4 sets of 5-10 reps</td>
                    </tr>
                    <tr>
                        <td>Bulgarian Split Squat</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Hack Squat</td>
                        <td>5 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Seated Calf Raises</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="wrapperE wrappers">
            <h1>5 Days</h1>
            <button class="buttons E"><i class="arrow" id="XE1"></i><i class="arrow up" style="display: none;" id="XE2"></i></button>
        </div>
        <div class="wrapperE1 hide wrappers1">
            <h1 >Push-Pull-Legs x Upper-Lower</h1>
            <button class="buttons E1"><i class="arrow" id="XEH11"></i><i class="arrow up" style="display: none;" id="XEH12"></i></button>
            <div class="wrapperEH1 hide tables">
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 1 (Push)</th>
                    </tr>
                    <tr>
                        <td>Incline Bench Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Dumbbell Over Head Press</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Superset Chest Fly x Tricep Extension</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Raises</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 2 (Pull)</th>
                    </tr>
                    <tr>
                        <td>Lateral Pull Down</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Bent Over Rows</td>
                        <td>4 sets of 10-15 reps</td>
                    </tr>
                    <tr>
                        <td>Slight incline Seated Dumbbell Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>EZ Bar Curls</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 3 (Legs)</th>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td>5 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Romanian Deadlift</td>
                        <td>6 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Standing Calf Raises</td>
                        <td>4 sets of 20 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 4 (Upper)</th>
                    </tr>
                    <tr>
                        <td>Bench-press</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Pulldowns</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Miletary Press</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Tricep Pushdown</td>
                        <td>3 sets of 20 reps</td>
                    </tr>
                    <tr>
                        <td>Hammer Curls</td>
                        <td>3 sets of 12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 5 (Lower)</th>
                    </tr>
                    <tr>
                        <td>Squat</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hack Squat</td>
                        <td>3 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Seated Calf Raises</td>
                        <td>4 sets of 30 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Romanian Deadlift</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                </table>
            </div>
            <h1 > Arnold x Upper-Lower</h1>
            <button class="buttons E2"><i class="arrow" id="XEH21"></i><i class="arrow up" style="display: none;" id="XEH22"></i></button>
            <div class="wrapperEH2 hide tables">
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 1 (Chest & Back)</th>
                    </tr>
                    <tr>
                        <td>Bench Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Dumbbell Pullover</td>
                        <td>3 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Bent Over Rows</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Deadlift</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 2 (Shoulders & Arms)</th>
                    </tr>
                    <tr>
                        <td>Miletary Press</td>
                        <td>3 sets of 5-8 reps</td>
                    </tr>
                    <tr>
                        <td>Close Grip Bench Press</td>
                        <td>4 sets of 10-15 reps</td>
                    </tr>
                    <tr>
                        <td> Hammer Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Raises</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 3 (Legs)</th>
                    </tr>
                    <tr>
                        <td>Squats</td>
                        <td>5 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Lunges</td>
                        <td>6 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>4 sets of 10-12 reps</td>
                    </tr>
                    <tr>
                        <td>Standing Calf Raises</td>
                        <td>4 sets of 20 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 4 (Upper)</th>
                    </tr>
                    <tr>
                        <td>Bench-press</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Lateral Pulldowns</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Miletary Press</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Tricep Pushdown</td>
                        <td>3 sets of 20 reps</td>
                    </tr>
                    <tr>
                        <td>Hammer Curls</td>
                        <td>3 sets of 12 reps</td>
                    </tr>
                </table>
                <table border="1" style="width: 100%;">
                    <tr>
                        <th colspan="2">Day 5 (Lower)</th>
                    </tr>
                    <tr>
                        <td>Squat</td>
                        <td>5 sets of 15 reps</td>
                    </tr>
                    <tr>
                        <td>Hack Squat</td>
                        <td>3 sets of 10 reps</td>
                    </tr>
                    <tr>
                        <td>Seated Calf Raises</td>
                        <td>4 sets of 30 reps</td>
                    </tr>
                    <tr>
                        <td>Hamstring Curls</td>
                        <td>3 sets of 8-12 reps</td>
                    </tr>
                    <tr>
                        <td>Romanian Deadlift</td>
                        <td>4 sets of 15 reps</td>
                    </tr>
                </table>
            </div>
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
                    Send us a message <a href="" target="_blank" class="when-hover">here</a>!
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
<Script>
    $(document).ready(function() {
        $(".A").on('click',function(){
            $('#XA1').toggle('slide');
            $('#XA2').toggle('slide');
            $(".wrapperA1").toggle('slide');
            $(".wrapperA1").css({'display':'grid','grid-template-columns':'1fr 1fr'});
            $(".A1").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
        
        });
        $(".B").on('click',function(){
            $('#XB1').toggle('slide');
            $('#XB2').toggle('slide');
            $(".wrapperB1").toggle('slide');
            $(".wrapperB1").css({'display':'grid','grid-template-columns':'1fr 1fr'});
            $(".B1").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
        });
        $(".C").on('click',function(){
            $('#XC1').toggle('slide');
            $('#XC2').toggle('slide');
            $(".wrapperC1").toggle('slide');
            $(".wrapperC1").css({'display':'grid','grid-template-columns':'1fr 1fr'});
            $(".C1").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
            $(".C2").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
        });
        $(".D").on('click',function(){
            $('#XD1').toggle('slide');
            $('#XD2').toggle('slide');
            $(".wrapperD1").toggle('slide');
            $(".wrapperD1").css({'display':'grid','grid-template-columns':'1fr 1fr'});
            $(".D1").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
        });
        $(".E").on('click',function(){
            $('#XE1').toggle('slide');
            $('#XE2').toggle('slide');
            $(".wrapperE1").toggle('slide');
            $(".wrapperE1").css({'display':'grid','grid-template-columns':'1fr 1fr'});
            $(".E1").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
            $(".E2").css({'justify-self':'center','align-self':'center','width':'50%','height':'40%'});
        });
        $(".A1").on('click',function(){
            $('#XAH1').toggle('slide');
            $('#XAH2').toggle('slide');
            $(".wrapperAH").toggle('slide');
        });
        $(".B1").on('click',function(){
            $('#XBH1').toggle('slide');
            $('#XBH2').toggle('slide');
            $(".wrapperBH").toggle('slide');
        });
        $(".C1").on('click',function(){
            $('#XCH11').toggle('slide');
            $('#XCH12').toggle('slide');
            $(".wrapperCH1").toggle('slide');
        });
        $(".C2").on('click',function(){
            $('#XCH21').toggle('slide');
            $('#XCH22').toggle('slide');
            $(".wrapperCH2").toggle('slide');
        });
        $(".D1").on('click',function(){
            $('#XDH1').toggle('slide');
            $('#XDH2').toggle('slide');
            $(".wrapperDH").toggle('slide');
        });
        $(".E1").on('click',function(){
            $('#XEH11').toggle('slide');
            $('#XEH12').toggle('slide');
            $(".wrapperEH1").toggle('slide');
        });
        $(".E2").on('click',function(){
            $('#XEH21').toggle('slide');
            $('#XEH22').toggle('slide');
            $(".wrapperEH2").toggle('slide');
        });
    });
</Script>

</body>

</html>