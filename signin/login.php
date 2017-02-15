<?php
    session_start();
    require'config.php';
    $salt='J2?H23!';
    if($_POST['email']!="")
    {    
        if($_POST['pass']!="")
        {
	       // get and clean data from form
		    $email =$_POST['email'];
            $pass = $_POST['pass'];
            $pass= md5($pass.$salt);    
        
		    $q="SELECT id,email,pass,type FROM accounts WHERE email='$email' AND pass='$pass'";   
            $res=mysqli_query($conn,$q);
            $row = mysqli_fetch_row($res);
             
        	if($row[1]==$email && $row[2]==$pass) 
		    {
                $_SESSION['email']=$email;
                $_SESSION['id']=$row[0];
			    $_SESSION['EXPIRES'] = time() + 3600;   
                if($row[3]==2)
                {
                    header('Location: /library/Admin/');   
                }
                else
                {
                    header('Location: /library/main/');   
                }
		    }
            else
            {
             //   header('Location: /library/signin/unauth.php');
            }
        
        }
    }
    else
    {
               //   header('Location: /library/signin/unauth.php');
    }
?>