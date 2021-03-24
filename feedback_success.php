
<?php
require('connection.php');
require('mailer.php');
if(isset($_POST['author']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comment']))
{
    $name=$_POST['author'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['comment'];
    $stmt = $conn->prepare("Insert into feedback(name,email,subject,message) values('$name','$email','$subject','$message');");
    $stmt->execute();
    echo '<script>alert("Thank You..! Your Feedback is Valuable to Us");</script>';
    if(sendfeedbackMail($email,$name))
    {
                echo "Mail Sent";
                echo "<br><br>";
                echo $stmt->execute();
                echo "<br><br>";
    }
    header("Location: ./contact.php");
}

?>