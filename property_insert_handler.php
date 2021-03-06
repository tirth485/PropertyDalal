<?php
    require('connection.php');
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        //$monthly=$_POST['monthly'];
        $address=$_POST['address'];
        $type=$_POST['type'];
        // echo "Post set?".($_POST["images"]);
        
        // echo "Image set?".isset($_FILES["images"]);
        $target_dir="uploads/";
        // echo "Set thayu?".isset($_FILES['images']);
        $target_file= $target_dir . basename($_FILES["xxx"]["name"]);
        echo "#######<br>";
        print_r($target_file);
        echo "#######<br>";
        print_r($_FILES);
        $temp_file=$_FILES["xxx"]["name"];
        echo "#######<br>";
        print_r($temp_file);
        echo "#######<br>";
        
        move_uploaded_file($_FILES["xxx"]["tmp_name"], $target_file);
        $description=mysqli_real_escape_string($conn ,$_POST['description']);
        $price=$_POST['price'];
        
        $query="INSERT INTO property (name,address,type,image,description,price) VALUES ('$name','$address','$type','$temp_file','$description','$price')";
        $insert=$conn->query($query);
        $last_id = $conn->insert_id;
        $c=count($_FILES['img']['name']);
        if($insert){
    
            if($c < 10){
    
                for ($i=0; $i <$c; $i++) { 
                    $img_name=$_FILES['img']['name'][$i];
                    move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" .$img_name);
                    $query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
                    $ins=$conn->query($query_multi);
                }
                // else{
                // 	echo "MAX LIMIT EXCEED";
                // }
    
            }
    
        }
    
    
    }
?>