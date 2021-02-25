<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
require 'PHPMailer/PHPMailerAutoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vs2147136@gmail.com';                     //SMTP username
    $mail->Password   = 'ahmedabad';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('vs2147136@gmail.com', 'Property Dalal');
    $mail->addAddress('tirthshah485@gmail.com', 'Tirth Shah');     //Add a recipient
    $mail->addAddress('49yash@gmail.com');              //Name is optional
    $mail->addReplyTo('tirthshah485@gmail.com', 'Information');
   /* $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/
    //Content
    $rndno=rand(100000, 999999);
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Property Dalal';
    $mail->Body    = 'Welcome to Property Dalal Your One time verification code is '.$rndno;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>