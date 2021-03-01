 
<?php
session_start();
require('connection.php');
require('mailer.php');
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['city'])  && isset($_POST['phone'])  && isset($_POST['type']) && isset($_POST['password']) && isset($_POST['confirm-password']))
    {
        $uname=$_POST['name'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $phone=$_POST['phone'];
        $type_user=$_POST['type'];
        $user_password=md5($_POST['password']);

        $stmt = $conn->prepare("Select userid from Users where email='".$email."';");
        $stmt->execute();
        $stmt->store_result();
        echo $stmt->num_rows();

        //User is already registered with this same email...
        if($stmt->num_rows()>0){
            echo "Record Already Exists...";
            $_SESSION['email_exist']=1;
            header("Location: http://".$_SERVER['SERVER_NAME']."/PropertyDalal/register.php"); 
        }
        //User is new and not registered with any matching email...
        else{
            $stmt = $conn->prepare("Insert into Users(name,email,password,phone,city,type,isverified) values(?,?,?,?,?,?,?);");
            $verified=0;
            $stmt->bind_param("ssssssi",$uname, $email, $user_password,$phone,$city,$type_user,$verified);
            
            if(sendMail($email,$uname))
            {
                echo "Mail Sent";
                echo "<br><br>";
                echo $stmt->execute();
                echo "<br><br>";
            }
            echo "Heelllpoooo";
            $_SESSION['otp_by_mailer']=$otp_by_mailer;
            $_SESSION['user_email']=$email;
            
            header("Location: http://".$_SERVER['SERVER_NAME']."/PropertyDalal/otp_verifier.php");
        } 
        $conn->close();
    }
?>