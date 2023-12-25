<?php 
    session_start();
    include '../process/conn.php';


    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
         $header="
        
        <div class='sign-up hover1 '><a href='/member/' class='links'><div class='linksS'>Profile</div></a></div>
        <div class='sign-up hover1 '><a href='/process/logout.php' class='links'><div class='linksS'>Log out </div></a></div>
        ";

        $ID=$_SESSION['id'];
        $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from customers where id=$ID"));
        $m=$row['membership'];
        $sql2="select Mname from memberships where mNumber=$m";
        if(isset($m)){
            if(mysqli_query($conn,$sql2)){
                        $row2=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
                    }
                }

        include 'profile-DB.php';
    }
    else{
        header("Location: /process/login.php");
    }
  
?>

<!-- ################################################################################################## -->


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
                < <div class="items hover "><a href="/Schedules/Schedules.php" class="links"><div class="linksS">Schedule</div></a></div>
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

    
    <div class="main">

        <form method="post" action="">
        <div class="motto col-12">
            <div class="col-10" id="edit">
                <h2>
                    <button type="submit" name="save" class='edit-button' >Save</button>
                </h2>
            </div> 
            <div class="col-12"></div><div class="col-2"><h3>ID:<h3></div>
            <div class="col-5 values">
                <?php echo($row['id']);?>
            </div>

            </div><br><br> <hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="username">Username:</label><h3></div>
            <div class="col-5 values"><input type="text" name="username" id="username" value="<?php echo($row['username']);?>" placeholder="">
                <?php if (isset($usernameErr)){echo $usernameErr;}?> <br>
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="first_name">First Name:</label><h3></div>
            <div class="col-5 values"><input type="text" name="fname" id="first_name" value="<?php echo($row['fname']);?>" placeholder="">
                <?php if (isset($fnameErr)){echo $fnameErr;}?> <br>
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="middle_name">Middle Name:</label><h3></div>
            <div class="col-5 values"><input type="text" name="mname" id="middle_name" value="<?php echo($row['mname']);?>" placeholder="">
             <?php if (isset($mnameErr)){echo $mnameErr;}?> <br>
        </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="last_name">Last Name:</label><h3></div>
            <div class="col-5 values"><input type="text" name="lname" id="last_name" value="<?php echo($row['lname']);?>" placeholder="">
             <?php if (isset($lnameErr)){echo $lnameErr;}?> <br>
        </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="dob">Date of Birth:</label><h3></div>
            <div class="col-5 values"><input type="date" name="DOB" id="dob" value="<?php echo($row['DOB']);?>">
            <?php if (isset($DOBErr)){echo $DOBErr;}?> <br>
        </div>      
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Gender:<h3></div>
            <div class="col-5 values">
            <?php echo($row['gender']);?>
                
            </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="email">Email:</label><h3></div>
            <div class="col-5 values"><input type="email" name="email" id="email" value="<?php echo($row['email']);?>" placeholder="">
            <?php if (isset($emailErr)){echo $emailErr;}?>
        </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3><label for="phone">Phone Number:</label><h3></div>
            <div class="col-5 values"><input type="tel" name="phone" id="phone" value="<?php echo( '0'.$row['phone']);?>" placeholder="">
            <?php if (isset($phoneErr)){echo $phoneErr;}?> 
        </div>
            </div><br><br><hr><br>
            <div class="col-12"><div class="col-2"><h3>Membership:<h3></div>
            <div class="col-5 values">
            <?php if(isset($row2)){echo($row2['Mname']);}
            else{$row2="YOU ARE NOT SUBSCRIBED YET!";
                echo $row2;}?>
                
            </div>
            </div><br><br>

    </div> 
    </form>
            <div class="desc"></div>
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