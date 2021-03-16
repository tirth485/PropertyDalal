<?php
    $otp_by_user="";
    $otp_by_mailer="";
    function sendMail($email,$uname){
        GLOBAL $otp_by_mailer;
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

            $otp_by_mailer=$rndno;
            $mail->send();
            // echo 'Message has been sent';
            return 1;
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return 0;
        }
    }
    function sendfeedbackMail($email,$uname){
        GLOBAL $otp_by_mailer;
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
            $mail->Body    = 'hi '.$uname.'<br>Thank you so much for taking the time to send this! Everyone here at property Dalal loves to know that our customers enjoy what we do.
            <br>Thank you again! We’re looking forward to making your experience even better in the future!<br>Best,<br> <b>Property Dalal</b> ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $otp_by_mailer=$rndno;
            $mail->send();
            // echo 'Message has been sent';
            return 1;
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return 0;
        }
    }
    function passwordmail($email){
        GLOBAL $otp_by_mailer;
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
            $mail->addAddress($email);     //Add a recipient
            
        
                                           //Set email format to HTML
            $rndno=rand(100000, 999999);
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Property Dalal';
            $mail->Body    = 'Welcome to Property Dalal Your One time verification code is '.$rndno;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $otp_by_mailer=$rndno;
            $mail->send();
            // echo 'Message has been sent';
            return 1;
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return 0;
        }
    }
    ?>