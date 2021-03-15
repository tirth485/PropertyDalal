<?php
session_start();
require('connection.php');
require('mailer.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass1=md5($_POST['pass1']);
    $pass2=md5($_POST['pass2']);
    if ($pass1==$pass2){

        
        $stmt = $conn->prepare("update Users set password=? where email=?;");
        $stmt->bind_param('ss',$pass1,$email);
        $stmt->execute();
        header("Location: http://".$_SERVER['SERVER_NAME']."/PropertyDalal/index.php");


    }
    else
    {
        echo "failed";
    }



    

}
?>