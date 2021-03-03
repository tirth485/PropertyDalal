<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <?php
  $servername = "remotemysql.com";
  $username = "UMHtrZaysp";
  $password = "3N3N6nsb7Z";
  $database = "UMHtrZaysp";
  // Create connection
  $mysqli = new mysqli($servername, $username, $password,$database);
  // echo $_SERVER['HTTP_HOST'];
  // Check connection
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
  // echo "Connected successfully";
  ?> 
  <body>   
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
              <?php 
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
                $description=mysqli_real_escape_string($mysqli ,$_POST['description']);
                $price=$_POST['price'];
                
                $query="INSERT INTO property (name,address,type,image,description,price) VALUES ('$name','$address','$type','$temp_file','$description','$price')";
                $insert=$mysqli->query($query);
                $last_id = $mysqli->insert_id;
                $c=count($_FILES['img']['name']);
                if($insert){
            
                    if($c < 10){
            
                        for ($i=0; $i <$c; $i++) { 
                            $img_name=$_FILES['img']['name'][$i];
                            move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" .$img_name);
                            $query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
                            $ins=$mysqli->query($query_multi);
                        }
                        // else{
                        // 	echo "MAX LIMIT EXCEED";
                        // }
            
                    }
            
                }
            
            
            }
            
            
                ?>
                <form method="POST" action="#"  enctype="multipart/form-data">                                                 
                <div class="aa-single-field">
                 <label for="inputEmail" class="col-lg-2 control-label">Name Of Property</label>
                 <input type="text" name="name" class="form-control"  placeholder="Name Of Property">
                </div>
                <div class="aa-single-field">
                <label for="textArea" class="col-lg-2 control-label">Address</label>
                  
                  <textarea class="form-control" name="address" rows="3" id="textArea"></textarea>
                </div>
                <div class="aa-single-field">
                <label for="inputPassword" class="col-lg-2 control-label">type</label>
                <input type="text" name="type" class="form-control"  placeholder="buy or sell">
                </div>
                
                <label for="textArea" class="col-lg-2 control-label">Featured Image</label>
                <input type="file" name="xxx" id="fileSelect"><br><br> 
                
                <div class="aa-single-field">
                <label for="textArea" class="col-lg-2 control-label">Rooms Images</label>
                <input type="file" name="img[]" multiple>
                </div>
                <div class="aa-single-field">
                <label for="textArea" class="col-lg-2 control-label">Description</label>
                <textarea class="form-control" name="description" rows="3" id="textArea"></textarea>
                </div>
                <div class="aa-single-field">
                <label for="inputPassword" class="col-lg-2 control-label">Monthly Charge</label>
                <input type="text" name="price" class="form-control"  placeholder="Monthly Charge">
                </div>
                <div class="aa-single-field">
                <button type="reset" class="btn btn-danger">Cancel</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  
  </body>
  </script>
</html>



            