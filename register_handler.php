 
<?php
require('connection.php');

    function sendMail($email,$uname){
        echo $email;
        require 'PHPMailer/class.phpmailer.php';
        require 'PHPMailer/class.smtp.php';
        require 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer(true);

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'vs2147136@gmail.com';                     //SMTP username
            $mail->Password   = 'ahmedabad';                               //SMTP password
            $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            $mail->setFrom('vs2147136@gmail.com', 'Property Dalal');
            $mail->addAddress($email,$uname);     //Add a recipient
            
        
            $rndno=rand(100000, 999999);
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Property Dalal';
            $mail->Body    = 'Welcome to Property Dalal Your One time verification code is '.$rndno;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            // echo 'Message has been sent';
            return 1;
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return 0;
        }
    }

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['city'])  && isset($_POST['phone'])  && isset($_POST['type']) && isset($_POST['password']) && isset($_POST['confirm-password']))
    {
        $uname=$_POST['name'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $phone=$_POST['phone'];
        $type_user=$_POST['type'];
        $user_password=md5($_POST['password']);

        // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        
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
        // header("Location: http://".$_SERVER['SERVER_NAME']."/PropertyDalal/otp_verifier.php"); 
        $conn->close();
    }
?>