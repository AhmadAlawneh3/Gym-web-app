<?php
    session_start();
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        
            $header="
        
       <div class='sign-up hover1 '><a href='/member/' class='links'><div class='linksS'>Profile</div></a></div>
        <div class='sign-up hover1 '><a href='/process/logout.php' class='links'><div class='linksS'>Log out </div></a></div>
        ";
            $aya="  
            <div class='content'>
                <div class='membership-1' onclick='fun1()'>
                    <h3>1 Month Plan</h3>
                    <h1 class='price'>49JOD</h1>
                    <p class='price'>One time payment</p>
                    <h4>Become a one-month member at Tigers' Gym!</h4>
                </div>
            <div class='separate'></div>
            <div class='membership-2' onclick='fun2()'>
                <h2>Annual Plan</h2>
                <h1 class='price'>319JOD</h1>
                <p class='price'>26.66JOD  billed monthly</p>
                <h4>Members' favourite! <br>
                Become an annual member at Tigers' Gym!
                </h4>
            </div>
            <div class='separate'></div>
            <div class='membership-3' onclick='fun3()'>
                <h3>3 Month Plan</h3>
                <h1 class='price'>99JOD</h1>
                <p class='price'>33JOD  billed monthly</p>
                <h4>Become a three-month member at Tigers' Gym!</h4>
            </div>
        </div>

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

        <div class='container2'>

        <div class='left'>
            <form action='' method='post'>
                <label for='first-name'>First Name:
                  <input type='text' name='fname' id='fname' placeholder='First Name' value=''
                 '>
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
                  <input type='text' name='cvc' id='cvc'  placeholder='CVC Code' >
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

                <label for='membership'>Membership Type:
                    <select name='membership' id='membership'>
                        <option value='1'>Annual</option>
                        <option value='3'>Three Months</option>
                        <option value='2'>One Month</option>
                    </select>
                  </label>
                  
                  <br>
                
        </div>
                <button type='submit' name='Submit' value='Submit'>Confirm</button>
      
                
              </form>
          </div>
        ";
            
            }
    else{
           $header="<div class='sign-up hover1'><a href='/process/signUp.php' class='links'><div class='linksS'>Sign up</div></a></div>
                <div class='log-in hover1 '><a href='/process/login.php' class='links'><div class='linksS'>Log in</div></a></div>";
      

            $aya="<div class='content'>
            <div class='membership-1' onclick='fun4()'>
                <h3>1 Month Plan</h3>
                <h1 class='price'>49JOD</h1>
                <p class='price'>One time payment</p>
                <h4>Become a one-month member at Tigers' Gym!</h4>
            </div>
            <div class='separate'></div>
            <div class='membership-2' onclick='fun4()'>
                <h2>Annual Plan</h2>
                <h1 class='price'>319JOD</h1>
                <p class='price'>26.66JOD  billed monthly</p>
                <h4>Members' favourite! <br>
                Become an annual member at Tigers' Gym!
                </h4>
            </div>
            <div class='separate'></div>
            <div class='membership-3' onclick='fun4()'>
                <h3>3 Month Plan</h3>
                <h1 class='price'>99JOD</h1>
                <p class='price'>33JOD  billed monthly</p>
                <h4>Become a three-month member at Tigers' Gym!</h4>
            </div>
            </div>
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
    include 'membership_validation.php';

    
?>
