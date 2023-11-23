<?php 
    session_start();
    include '../process/conn.php';
    

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $msg="<h1 class='motto'>Welcome, $_SESSION[username]!</h1>";
         $header="
        
        
        <div class='sign-up hover1 '><a href='/member/' class='links'><div class='linksS'>Profile</div></a></div>
        <div class='sign-up hover1 '><a href='/process/logout.php' class='links'><div class='linksS'>Log out </div></a></div>
        ";

        $ID=$_SESSION['id'];
        $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from customers where id=$ID"));
        $m=$row['membership'];
        $sql2="select Mname from memberships where mNumber=$m";
        if(mysqli_query($conn,$sql2)){
                    $row2=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
                }
    }
    else{
        header("Location: /process/login.php");
    }
  
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="profile.css" rel="stylesheet" type="text/css">
        <title>Profile</title>
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

    <?php echo $msg ?>
        <div class="main">


        <div class="motto col-12">
            <div class="col-10" id="edit"><h2><button class="edit-button"><a href="profile_edit.php">Edit</a></button></h2></div> 

            <div class="col-12"></div><div class="col-2"><h3>ID:<h3></div>
            <div class="col-5 values">
                <?php echo($row['id']);?>
            
            </div>
            </div><br><br> <hr><br>
            <div class="col-12"><div class="col-2"><h3>Username:<h3></div>
            <div class="col-5 values">
            <?php echo($row['username']);?>
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>First Name:<h3></div>
            <div class="col-5 values">
            <?php echo($row['fname']);?>
                
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Middle Name:<h3></div>
            <div class="col-5 values">
            <?php echo($row['mname']);?>
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Last Name:<h3></div>
            <div class="col-5 values">
            <?php echo($row['lname']);?>
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Date of Birth:<h3></div>
            <div class="col-5 values">
            <?php echo($row['DOB']);?>           
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Gender:<h3></div>
            <div class="col-5 values">
            <?php echo($row['gender']);?>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Email:<h3></div>
            <div class="col-5 values">
            <?php echo($row['email']);?>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Phone Number:<h3></div>
            <div class="col-5 values">
            <?php echo($row['phone']);?>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Membership<h3></div>
            <div class="col-5 values">
            <?php if(isset($row2)){echo($row2['Mname']);}
            else{$row2="YOU ARE NOT SUBSCRIBED YET!";
                echo $row2;}?>
            </div><br><br>

        </div> 
        </div>
    </div></div></div></div>
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


