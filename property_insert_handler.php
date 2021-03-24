<?php
    session_start();
    require('connection.php');
    if(isset($_POST['submit'])){

        $name=mysqli_real_escape_string($conn,$_POST['name']);
        //$monthly=$_POST['monthly'];
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        $type=$_POST['type'];
        // echo "Post set?".($_POST["images"]);
        
        // echo "Image set?".isset($_FILES["images"]);
        $target_dir="uploads/";
        // echo "Set thayu?".isset($_FILES['images']);
        $target_file= $target_dir . basename($_FILES["feature_image"]["name"]);
        // echo "#######<br>";
        print_r($target_file);
        // echo "#######<br>";
        print_r($_FILES);
        $temp_file=$_FILES["feature_image"]["name"];
        // echo "#######<br>";
        print_r($temp_file);
        // echo "#######<br>";
        
        move_uploaded_file($_FILES["feature_image"]["tmp_name"], $target_file);
        $description=mysqli_real_escape_string($conn ,$_POST['description']);
        $price=$_POST['price'];
        $sqft=$_POST['sqft'];
        $userid=$_SESSION['userid'];
        $category=$_POST['Category'];
        $features=mysqli_real_escape_string($conn,$_POST['features']);
        $query="INSERT INTO property (name,address,type,image,description,price,features,userid,sqft,category) VALUES ('$name','$address','$type','$temp_file','$description','$price','$features','$userid','$sqft','$category')";
       
        $insert=$conn->query($query);
        $last_id = $conn->insert_id;
        $c=count($_FILES['property_images']['name']);
        if($insert){
    
            if($c < 10){
    
                for ($i=0; $i <$c; $i++) { 
                    $img_name=$_FILES['property_images']['name'][$i];
                    move_uploaded_file($_FILES['property_images']['tmp_name'][$i] , "uploads/" .$img_name);
                    $query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
                    $ins=$conn->query($query_multi);
                }
                // else{
                // 	echo "MAX LIMIT EXCEED";
                // }
    
            }
    
        }
    $_SESSION['property_inserted']=1;
    header("Location: "."./insertproperty.php");
    
    }
?>