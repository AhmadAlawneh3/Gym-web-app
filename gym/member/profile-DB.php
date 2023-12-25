<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(isset($_POST['save']))
            {   
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
                        if($_POST['username']===$row['username'])
                        {
                            $flag=1;
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
                    
                }

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
                  
 
                 if($flag)
                {
                   
                    $sql1 = "update users set username='$username' where id='$ID' ";
                    
                    if (mysqli_query($conn, $sql1)) 
                    {
                        $sql2="update customers set fname='$fname', mname='$mname', lname='$lname', dob='$DOB', email='$email', phone =$phone where id=$ID ";
                        
                        mysqli_query($conn, $sql2);
                        header("Location: /member/index.php");
                        exit();
                    } else 
                    {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }   
                }

            }
        }
        ?>