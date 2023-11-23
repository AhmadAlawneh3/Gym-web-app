<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{	

	
	if (isset($_POST['Submit']))
	{
		include '../process/conn.php';
		$flag=1;

		if(empty($_POST['name']))
        {
            $nameErr= '<span class="error"> First name can not be left blank.</span>';
        $flag=0;
        }
        else{   $name = $_POST["name"];
                if (!preg_match("/^[A-z-' ]{3,}$/",$_POST['name']))
                {$nameErr= '<span class="error"> Name name should be 3 or more characters.</span>';
                    $flag=0; }
            
        }

        if(empty($_POST['phoneNUM']))
        {
            $phoneErr='<span class="error">Phone number name can not be left blank.</span>';
            $flag=0;
        }
        else
        {
            $phone=$_POST["phoneNUM"];
            if (!preg_match("/^(079|078|077)[0-9]{7}$/",$_POST['phoneNUM']))
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

        if(empty($_POST['message']))
        {
            $messageErr='<span class="error">Message can not be left blank.</span>';
            $flag=0;
        }
        else
        {
            $message=$_POST["message"];
            if (!preg_match("/^[A-z0-9., ]*$/",$_POST['message']))
            {
            	$messageErr= '<span class="error"> Message should only coontain characters and . or ,</span>';
                $flag=0;
            }
        }

        if($flag)
        {
            $sql1 = "INSERT INTO contact_messages (name, phone,email,message) VALUES ($name,$phone,$email,$message)";
            mysqli_query($conn, $sql1);

            header("Location: contact-us.php?submited=1");	
        }
	}
}

?>