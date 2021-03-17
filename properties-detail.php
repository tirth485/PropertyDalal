<!DOCTYPE html>
<html lang="en">
<?php 
 require('header.php');
  require_once('connection.php');
  ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Properties Details</title>

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
  <script>
    function change_active(){
      var someElement= document.getElementById("nav_property");
      someElement.className += " active";
    }
  </script>
  <body class="aa-price-range" onload="change_active()">  
  
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Properties Details</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">APPARTMENT TITLE</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-properties-content">    
            <div class="aa-properties-details">
            <?php
            $propid=11;
            print_r($_SESSION);
            if(isset($_GET['pid']) && is_numeric($_GET['pid']))
            {
              echo is_numeric($_GET['pid']);
              // echo is_numeric(intval($_GET['pid']));
              $propid=$_GET['pid'];
            }
            $stmt = $conn->prepare("Select images from details where proid='$propid'");
            if($stmt->execute() === TRUE)
            {
                $result = $stmt->get_result();
                $image_array=array();
                while ($row = $result->fetch_assoc()) {
                $image = $row['images'];
                array_push($image_array,$row['images']);
                }
                
                echo " <div class='aa-properties-details-img'>";
                foreach($image_array as $i){
                  echo "<img src='uploads/$i' alt='img'>";
                }
                echo "</div>";
            }
            echo "<div class='aa-properties-info'>";
            
            $stmt = $conn->prepare("Select * from property where pid='$propid'");
            if($stmt->execute() === TRUE)
            {
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    
                    $name =$row['name'];
                    $address =$row['address'];
                    $type =$row['type'];
                    // $image =$row['image'];
                    $description =$row['description']; 
                    $price =$row['price']; 
                    $userid =$row['userid']; 
                    $sqft =$row['sqft']; 
                    $category =$row['category'];
                    $features=explode(',',$row['features']);
                    $features_string="";
                    foreach($features as $ff){
                      $features_string.="<li>$ff<//li>";
                    }
                    echo "
                      <h2>$name</h2>
                      <h4>$address</h2>
                      <span class='aa-price'>Price: $$price</span>
                      <br>
                      <span class='aa-price'>Size: $sqft/sqft</span>
                      <p>$description</p>
                      <h4>Propery Features</h4>
                      <ul>
                        $features_string  
                      </ul>";
                }
            }
            ?>
            
            <input type="submit" id="btn_intrsted" onclick="change();" class="btn btn-primary btn-lg" value="I'm Interested">
            
            <h4>Property Video</h4>
              <iframe width='100%' height='480' src='https://www.youtube.com/embed/CegXQps0In4' frameborder='0' allowfullscreen></iframe>
              <h4>Property Map</h4>
              <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256' width='100%' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
              <!-- ############################################ -->
            </div>      
          </div>
        </div>                 
      </div>
    </div>

 
  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
              </div>
              <h2 style="color:crimson">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 
  <script src="js/jquery.min.js"></script>   
  <script src="js/bootstrap.js"></script>   
  <script type="text/javascript" src="js/slick.js"></script>
  <script type="text/javascript" src="js/nouislider.js"></script>
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <script src="js/custom.js"></script> 

  </body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    function sendRequest(url, data, callback){
		
    $.ajax({
        data:data,
        url:url,
        method:"POST",
        success:function (response){
               callback(response.message,"danger");
           
        }

    });
    
  }

    function change(){
      document.getElementById("btn_intrsted").style="background:black";
      document.getElementById("btn_intrsted").value="Okay";
      var data={
        userid:"<?php echo $_SESSION['userid'];?>",
        propid:"<?php echo $_GET['pid'];?>"
      };

      sendRequest("IntrestedUserHandler.php",data,()=>{} );
    }
  </script>
  
</html>