<?php
$fnameErr="";
$lnameErr="";
$emailErr="";
$passErr="";
if (isset($_POST['Submit']))
{
    //connect to the DB
    include 'conn.php';
    //if request method was post then start the checking process
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        //Flag is set to 1, if user enters data the doesn't meet the DB requirments it is set to 0 
        //and then checking the flag value ot decide wether to insert data into DB or not
        $flag=1;
        
        //Checking if every field is filed, then check if it matches the pattern or not, and every error has its own error message to be displayed to the user (till line 99)

        //username is checked if it is already exists in DB

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
        

        if(empty($_POST['mname']))
        {
            $mnameErr= '<span class="error">Middle name can not be left blank.</span>';
            $flag=0;
        }
        else 
        {   $mname = $_POST["mname"];
            if (!preg_match("/^[A-z-']{1,}$/",$_POST['mname']))
            {$mnameErr= '<span class="error"> Middle name should be 1 or more characters.</span>';
                $flag=0;}
            
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

        if(empty($_POST['username']))
        {
            $usernameErr='<span class="error">Username can not be left blank.</span>';
            $flag=0;
        }
        else
        {   $username=$_POST["username"];
            if (!preg_match("/^[A-z-'.]{3,}[0-9]*$/",$_POST['username']))
            {$usernameErr= '<span class="error"> Username name should be 3 or more characters.</span>';
                $flag=0;
            }
            else
            {
                $sql="select username from customers where username='$username'";
                if(mysqli_num_rows(mysqli_query($conn,$sql))==1)
                {
                    $flag=0;
                    $usernameErr= '<span class="error"> Username already exists.</span>';
                }
            }
            
        }

        if(empty($_POST['gender']))
        {
            $genderErr='<span class="error">Gender can not be left blank.</span>';
            $flag=0;
        }
        else
        {$gender=$_POST["gender"];}

        if(empty($_POST['DOB']))
        {
            $DOBErr='<span class="error">Date of Birth can not be left blank.</span>';
            $flag=0;
        }
        else
        {$DOB=$_POST["DOB"];}

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
        
        if(empty($_POST['email']))
        {
            $emailErr='<span class="error">Email can not be left blank.</span>';
            $flag=0;
        }
        else
        {
            $email=$_POST["email"];
            if (!preg_match("/^[A-z0-9-.]+@[A-z0-9-]+\.com$/",$_POST['email']))
            {$emailErr= '<span class="error"> Email should be example@example.com</span>';
                $flag=0;}
        }

        if(empty($_POST['password']))
        {
            $passErr='<span class="error">Password name can not be left blank.</span>';
            $flag=0;
        }
        else
        {
            $pass = md5($_POST["password"]);
            if (!preg_match("/^[A-z0-9-\.\$]{8,}$/",$_POST['password']))
            {$passErr= '<span class="error"> password should be 8 or more characters.</span>';
                $flag=0;}}
        
       // if user have every thing right data insertion will be performed into DB
        if($flag)
        {
            $sql1 = "INSERT INTO users (username, password) VALUES ('$username','$pass')";
            
            if (mysqli_query($conn, $sql1)) 
            {
                $sql2="INSERT INTO customers (id, username,fname, mname, lname, dob, gender, email, phone) VALUES ((select id from users where username='$username'),'$username' ,'$fname', '$mname', '$lname', '$DOB', '$gender', '$email', '$phone')";
                
                mysqli_query($conn, $sql2);
                header("Location: login.php");
                exit();
            } else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }   
        }

    }
}
?>

