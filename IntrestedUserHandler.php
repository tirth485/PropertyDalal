<?php
    require_once('connection.php');

    header("Content-Type: application/json");
    if(isset($_POST['userid']) && isset($_POST['propid'])){
    
    //  Hello {$_POST['userid']},{$_POST['propid']}, How are u ?
    $userid=$_POST['userid'];
    $propid=$_POST['propid'];
     $stmt = $conn->prepare("Insert into user_intrested(userid,propid) values(?,?)");
     $stmt->bind_param("ii",$userid,$propid);
            if($stmt->execute() === TRUE)
            {
                echo json_encode(array("message"=>"Sucessful"));
            }
            else{
                echo json_encode(array("message"=>"SQL Error"));
            }

    }
    else{
        echo json_encode(array("message"=>"BAD REQUEST"));
    }
?>