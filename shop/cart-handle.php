<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
        $flag=1;

        if(empty($_POST['fname']))
                {
                    $fnameErr= '<span class="error"> First name can not be left blank.</span>';
                    $flag=0;
                }
                else{   $fname = $_POST["fname"];
                        if (!preg_match("/^[A-z-']{3,}$/",$_POST['fname']))
                        {$fnameErr= '<span class="error"> First name should be 3 or more characters.</span>';
                            $flag=0; }
                    
                }


    if(empty($_POST['lname']))
    {
        $lnameErr='<span class="error">Last name can not be left blank.</span>';
        $flag=0;
    }
    else
    {   $lname=$_POST["lname"];
        if (!preg_match("/^[A-z-']{3,}$/",$_POST['lname']))
        {$lnameErr= '<span class="error"> Last name should be 3 or more characters.</span>';
            $flag=0;}
        
    }


    if(empty($_POST['cardName']))
    {
        $cardNameErr='<span class="error">Name can not be left blank.</span>';
        $flag=0;
    }
    else
    {   $cardName=$_POST["cardName"];
        if (!preg_match("/^[A-z ]{3,}$/",$_POST['cardName']))
        {$cardNameErr= '<span class="error">Name should be 3 or more characters.</span>';
            $flag=0;}
        
    }
    // echo $_POST['cardNumber'];
    if(empty($_POST['cardNumber']))
    {
        $cardNumberErr='<span class="error">Card number can not be left blank.</span>';
        $flag=0;
    }
    else
    {   
        $cardNumber=$_POST["cardNumber"];
        if (!preg_match("/^[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}$/",$_POST['cardNumber']))
        {$cardNumberErr= '<span class="error">Number should be 16 digits.</span>';
            $flag=0;}
        
    }

    if(empty($_POST['cvc']))
    {
        $cvcErr='<span class="error">CVC number can not be left blank.</span>';
        $flag=0;
    }
    else
    {   $cvc=$_POST["cvc"];
        if (!preg_match("/^[0-9]{3,4}$/",$_POST['cvc']))
        {$cvcErr= '<span class="error">CVC number should be 3 or 4 digits.</span>';
            $flag=0;}
        
    }

    if(empty($_POST['expDate']))
    {
        $expDateErr='<span class="error">Expiration Date  can not be left blank.</span>';
        $flag=0;
    }
    else
    {   $expDate=$_POST["expDate"];
        if (!preg_match("/^\d{4}-\d{2}$/",$_POST['expDate']))
        {$expDateErr= '<span class="error">Expiration Date should be in YYYY-MON format.</span>';
            $flag=0;}
        
    }

    if(empty($_POST['phone']))
    {
        $phoneErr='<span class="error">Phone number name can not be left blank.</span>';
        $flag=0;
    }
    else
    {
        $phone=$_POST["phone"];
        if (!preg_match("/^(079|078|077)[0-9]{7}$/",$_POST['phone']))
        {$phoneErr= '<span class="error"> Phone  number name should be 07X XXX XXXX.</span>';
            $flag=0;}
    }
    include '../process/conn.php';
    $total=0;
    // foreach($items as $id => $qnt){
    //     $sql="select price from product where p_id='$id'";
    //     $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
    //     $price=$row['price'];
    //     $sum=$price*$qnt;
    //     $total+=$sum;

    // }
    foreach ($items as $id => $qnt) {
    $sql = "SELECT price FROM product WHERE p_id='$id'";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    $price = floatval($row['price']); // Convert the price to float

    $quantity = is_array($qnt) ? $qnt[$id] : $qnt; // Extract the quantity value

    $sum = $price * $quantity;
    $total += $sum;
}


    

    $aya=" 
    <div class='container2'>

            <div class='left'>
                <form action='' method='post'>
                    <label for='first-name'>First Name:
                      <input type='text' name='fname' id='fname' placeholder='First Name' value='";
                      if(isset($fname)){
                        $aya.="$fname";
                      }
                      $aya.="'>";
                      if(isset($fnameErr)){
                            $aya.=$fnameErr;}

                      $aya.="
                    </label>
                   
                    <br>

                    <label for='last-name'>Last Name:
                      <input type='text' name='lname' id='lname' placeholder='Last Name' value='";
                      if(isset($lname)){$aya.= $lname;}
                      $aya.="'>";
                      if(isset($lnameErr)){$aya.= $lnameErr;}
                      $aya.="
                    </label>
                   
                    <br>
          
                    <label for='cardName'>Cardholder Name:
                      <input type='text' name='cardName' id='cardName'  placeholder='Cardholder Name' value='"
                      ;
                      if(isset($cardName)){$aya.= $cardName;}
                      $aya.="'>";
                      if(isset($cardNameErr)){$aya.= $cardNameErr;}
                      $aya.=
                      "
                    </label>
                    
                    <br>

                    <label for='cardNumber'>Card Number:
                      <input type='text' name='cardNumber' id='cardNumber'  placeholder='Card Number' onkeyup='formatCardNumber(this)' value='"
                      ;
                      if(isset($cardNumber)){$aya.= $cardNumber;}
                      $aya.="'>";
                      if(isset($cardNumberErr)){$aya.= $cardNumberErr;}
                      $aya.="
                    </label>
                    
                    <br>
            </div>

            <div class='right'>
                    <label for='cvc'>CVC Code:
                      <input type='text' name='cvc' id='cvc'  placeholder='CVC Code'  value='";
                      if(isset($cvc)){$aya.= $cvc;}
                      $aya.="' >";
                      if(isset($cvcErr)){$aya.= $cvcErr;}
                       $aya.="
                    </label>
                   
                    <br>

                    <label for='month'>Expiration Date:
                      <input type='month' name='expDate' id='expDate'  placeholder='Expiration Date' value='";
                      if(isset($expDate)){$aya.= $expDate;}
                      $aya.="' >";
                      if(isset($expDateErr)){$aya.= $expDateErr;}
                      $aya.="
                    </label>
                    
                    <br>

                    <label for='phone'>Phone Number:
                      <input type='tel' name='phone' id='phone'  placeholder='Phone Number' value='";
                      if(isset($phone)){$aya.= $phone;}
                      $aya.="' >";
                      if(isset($phoneErr)){$aya.= $phoneErr;}
                      $aya.="
                    </label>
                    
                    <br>
                    ";
                    $aya.="<h3>Total: $total</h3>";
                    $aya.="
                    
                    
            </div>
                    <button type='submit' name='Submit' value='Submit'>Confirm</button>
          
                    
                  </form>
              </div>
            <script>
                var aya=document.querySelector('.container2');
                aya.style.display='block';

                function formatCardNumber(input) {
                
                var cardNumber = input.value.replace(/\s/g, '');
                
                var formattedNumber = cardNumber.replace(/\d{4}(?=.)/g, '$& ');

                input.value = formattedNumber;
                }  

                function fun1() {
                    

                    var select = document.getElementById('membership');
                    select.selectedIndex = 2;
                }

                function fun2() {
                    
                    var select = document.getElementById('membership');
                    select.selectedIndex = 0;
                }

                function fun3() {
                     
                    var select = document.getElementById('membership');
                    select.selectedIndex = 1;
                } 
            </script>

            
            ";

            if($flag){
                $aya="
                <div class='content'>
                    <h1 class='motto'><span class='motto2'>Thank you for shopping at</span><a href='/home/home-page.php'> Tigers' Gym!</a>
                        <br>
                        <span class='motto2'>We will contact you soon for further details.</span>
                    </h1>
                </div>";

                setcookie("cart_items","",time() - 3600);
                // include '../process/conn.php';
                // $sql="update customers set membership='$membership' where id=$_SESSION[id]";
                // mysqli_query($conn,$sql);

            }

            
}



?>