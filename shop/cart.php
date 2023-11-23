<?php
    session_start();
    include '../process/conn.php';

if (isset($_COOKIE['cart_items'])) {
    $items = json_decode($_COOKIE['cart_items'], true);
} else {
    $items = array();
    setcookie("cart_items", json_encode($items), time() + (86400 * 30), "/");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['decrement'])) {
        $id = $_POST['decrement'];
        $items[$id] = isset($items[$id]) ? $items[$id] - 1 : 0;
    }

    if (isset($_POST['increment'])) {
        $id = $_POST['increment'];
        $items[$id] = isset($items[$id]) ? $items[$id] + 1 : 1;
    }

    if (isset($_POST['remove'])) {
        $id = $_POST['remove'];
        if (isset($items[$id])) {
            unset($items[$id]);
        }
        setcookie("cart_items", json_encode($items), time() + (86400 * 30), "/");
        header("location: /shop/cart.php");
        exit;
    }

    // Update the quantity values in the $_POST array
    foreach ($items as $id => $quantity) {
        $items[$id] = $quantity;
    }
}

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $header="
        
        <div class='sign-up hover1 '><a href='/member/' class='links'><div class='linksS'>Profile</div></a></div>
        <div class='sign-up hover1 '><a href='/process/logout.php' class='links'><div class='linksS'>Log out </div></a></div>
        ";
        $aya=" 
    <script>

        // hide n show
        function fun1() {
            var payment = document.querySelector('.container2');
            payment.style.display = 'block';

            var select = document.getElementById('membership');
            select.selectedIndex = 2;
        }

        function fun2() {
            var payment = document.querySelector('.container2');
            payment.style.display = 'block';

            var select = document.getElementById('membership');
            select.selectedIndex = 0;
        }

        function fun3() {
            var payment = document.querySelector('.container2');
            payment.style.display = 'block';

            var select = document.getElementById('membership');
            select.selectedIndex = 1;
        }

        //four digits
        function formatCardNumber(input) {
        
        var cardNumber = input.value.replace(/\s/g, '');
        
        var formattedNumber = cardNumber.replace(/\d{4}(?=.)/g, '$& ');

        input.value = formattedNumber;
        }   
        

      

    </script>


<div class='col-12'>
        <button type='submit' id='checkout'>Check Out</button>
        <div class='container2' style='display: none;'>

            <div class='left'>
                <form action='' method='post'>
                    <label for='first-name'>First Name:
                      <input type='text' name='fname' id='fname' placeholder='First Name'>
                    </label>
                    <br>
        
                    <label for='last-name'>Last Name:
                      <input type='text' name='lname' id='lname' placeholder='Last Name'>
                    </label>
                    <br>
          
                    <label for='cardName'>Cardholder Name:
                      <input type='text' name='cardName' id='cardName'  placeholder='Cardholder Name'>
                    </label>
                    <br>
        
                    <label for='cardNumber'>Card Number:
                      <input type='text' name='cardNumber' id='cardNumber'  placeholder='Card Number' onkeyup='formatCardNumber(this)'>
                    </label>
                    <br>
            </div>
        
            <div class='right'>
                    <label for='cvc'>CVC Code:
                      <input type='text' name='cvc' id='cvc'  placeholder='CVC Code' pattern='[0-9]{3,4}'>
                    </label>
                    <br>
        
                    <label for='month'>Expiration Date:
                      <input type='month' name='expDate' id='expDate'  placeholder='Expiration Date'>
                    </label>
                    <br>
        
                    <label for='phone'>Phone Number:
                      <input type='tel' name='phone' id='phone'  placeholder='Phone Number'>
                    </label>
                    <br>
        
                    <!-- <label for='membership'>Membership Type:
                        <select name='membership' id='membership'>
                            <option value='annual'>Annual</option>
                            <option value='threeMonths'>Three Months</option>
                            <option value='oneMonth'>One Month</option>
                        </select>
                      </label> -->
                      <br>
                    
            </div>
                    <button type='submit' name='Submit' value='Submit' method='post'>Confirm</button>
          
                    
                  </form>
            </div>
            </div>
            </div>
            <script>
                $('#checkout').click(function(event){
                event.preventDefault();
                 $('#checkout').hide();
                $('.container2').show();
                 });
            </script>";
        
        }
        else{
            $header="<div class='sign-up hover1'><a href='/process/signUp.php' class='links'><div class='linksS'>Sign up</div></a></div>
                <div class='log-in hover1 '><a href='/process/login.php' class='links'><div class='linksS'>Log in</div></a></div>";

            $aya="<div class='col-12'><button type='submit' id='checkout' onclick='fun4()'>Check Out</button></div>
            <h1 class='aya'>Please <a href='/process/login.php' >log in</a> first</h1>
                                    <script>
                                // hide n show
                               
                                function fun4() {
                                    var aya = document.querySelector('.aya');
                                    aya.style.display = 'block';
                                }

                            </script>";
                                            $_SESSION['url']=$_SERVER['REQUEST_URI'];
        }
        include 'cart-handle.php';





?>


<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="shop.css" rel="stylesheet" type="text/css">
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

<script >
//     document.addEventListener("DOMContentLoaded", function() {
//   var decrementBtn = document.getElementById("decrement");
//   var incrementBtn = document.getElementById("increment");
//   var quantityInput = document.querySelector(".quantity-input");

//   decrementBtn.addEventListener("click", function() {
//     var currentValue = parseInt(quantityInput.value);
//     if (currentValue > 1) {
//       quantityInput.value = currentValue - 1;
//     }
//   });

//   incrementBtn.addEventListener("click", function() {
//     var currentValue = parseInt(quantityInput.value);
//     quantityInput.value = currentValue + 1;
//   });
// });
    document.addEventListener("DOMContentLoaded", function() {
        var quantityButtons = document.querySelectorAll(".quantity-button");

        for (var i = 0; i < quantityButtons.length; i++) {
            var decrementBtn = quantityButtons[i].querySelector(".decrement");
            var incrementBtn = quantityButtons[i].querySelector(".increment");
            var quantityInput = quantityButtons[i].querySelector(".quantity-input");

            decrementBtn.addEventListener("click", function(event) {
                // event.preventDefault(); // Prevent the form from submitting
                var currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            incrementBtn.addEventListener("click", function(event) {
                // event.preventDefault(); // Prevent the form from submitting
                var currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        }
    });

</script>

<div class="main">
    <fieldset id="field">
        <legend>Your Items</legend>
        <!-- <?php 
               
        if (is_array($items)) {
        
        if (count($items)>0) {
                foreach ($items as $id => $qnt) 
            {
                $row=mysqli_fetch_assoc(mysqli_query($conn,"select * from product where p_id='$id'"));

                echo "<div class='col-11'>
                        <div class='col-1'></div>
                        <div id='item1big' class='col-10'>
                            <img class='pic1big' src='/images/$row[img]'>
                            
                            <div class='col-5'>
                                <h2>$row[name]<br>$row[price]</h2>
                                
                                <img src='/images/yepyepstar.png'>

                                <br><br><br> <br> <br>
                                <div class='quantity-button'>
                                    <form action='' method='post'>
                                        <button type='submit' class='quantity-btn' id='decrement' value='$id' name='decrement' method='post'>-</button>

                                        <input type='text' class='quantity-input' value='$qnt' name='quantity' readonly>

                                        <button class='quantity-btn' type='submit' id='increment' value='$id' name='increment' method='post'>+</button>
                                        <br>
                                        
                                        <button class='picsbtn' method='post' type='submit' name='remove' value='$row[p_id]'>Remove</button>
                                    </form>
                                </div>  
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>";
            }

        }
    }
    else
    {
      echo "No items selceted yet.";  
    }
    ?> -->
   <?php 
if (is_array($items)) {
    if (count($items) > 0) {
        foreach ($items as $id => $qnt) {
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM product WHERE p_id='$id'"));
            ?>
            <div class='col-11'>
                <div class='col-1'></div>
                <div id='item1big' class='col-10'>
                    <img class='pic1big' src='/images/<?php echo $row['img']; ?>'>

                    <div class='col-5'>
                        <h2><?php echo $row['name'] ?><br><?php echo $row['price'] ?></h2>

                        <img src='/images/yepyepstar.png'>

                        <br><br><br> <br> <br>
                        <div class='quantity-button'>
                            <form action='' method='post'>
                                <button type='submit' class='quantity-btn decrement' name='decrement' value='<?php echo $id ?>'>-</button>
                                <input type='text' class='quantity-input' value='<?php echo isset($items[$id]) ? $items[$id] : 0 ?>' name='quantity[<?php echo $id ?>]' readonly>
                                <button class='quantity-btn increment' type='submit' name='increment' value='<?php echo $id ?>'>+</button>
                                <br>
                                <button class='picsbtn' method='post' type='submit' name='remove' value='<?php echo $row['p_id'] ?>'>Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
            <?php
        }
    }
} else {
    echo "No items selected yet.";
}
?>

    </fieldset>
</div>

 
<?php if(isset($aya)){echo $aya;} ?>

<br>
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

