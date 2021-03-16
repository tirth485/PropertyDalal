<?php
session_start();
require('connection.php');
require('mailer.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass1=md5($_POST['pass1']);
    $pass2=md5($_POST['pass2']);
    echo $_SESSION['pass1'];
    
    
   
            if ($pass1==$pass2)
            {
                
                if(passwordMail($email))
                {
                    echo "Mail Sent";
                    echo "<br><br>";
                    //echo $stmt->execute();
                    echo "<br><br>";
                }
            
                $_SESSION['otp_by_mailer']=$otp_by_mailer;

                $_SESSION['pass']=$pass1;
                $_SESSION['email']=$email;
                header("Location: http://".$_SERVER['SERVER_NAME']."/PropertyDalal/passwordotp_verifierd.php");
            }
            else
            {
                echo "password not match";
            }
        
          
    
        



    

}
?>