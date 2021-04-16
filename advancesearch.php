<?php
require_once('connection.php');
?>
    
    <!DOCTYPE html>
<html lang="en">
  <!-- Start header section -->
  <?php 
  session_start();
  if(!isset($_SESSION['userid'])){
    header("Location: "."./index.php");
  }
  require('header.php');
  require_once('connection.php');

  ?>
  <!-- End header section -->
  <script>
    function change_active(){
      var someElement= document.getElementById("nav_property");
      someElement.className += " active";
    }
  </script>
  <body onload="change_active()">
  
  
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

 
  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Filter Properties</h2>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->


 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top text-center">
             <h2>Results of your Search:</h2><br>
            </div>       
            <?php 
            
            if(isset($_POST['category']))
            $category=$_POST['category'];

            if(isset($_POST['type']))
            $type=$_POST['type'];

            if(isset($_POST['city']))
            $city=$_POST['city'];
            $query="SELECT * FROM property WHERE";

            if(!empty($_POST["submit"])) 
            {
                if(isset($category))
                {
                $query .= " category= '".$category."'";
                }
                if(isset($type))
                {
                    $query .= " OR type='".$type."'";
                }
                if(isset($city))
                {
                    $query .=" OR address LIKE '%". $city . "%' ";
                }
                $stmt = $conn->prepare($query);
            $result_counter=0;   
            // echo $query;
            if($stmt->execute() === TRUE)
            {
               
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    $result_counter+=1;
                  $pid=$row['pid'];
                    $name =$row['name'];
                    $address =$row['address'];
                    $type =strtoupper($row['type']);
                    
                    $image =$row['image'];
                    $description =$row['description']; 
                    $price =$row['price']; 
                    $userid =$row['userid']; 
                    $sqft =$row['sqft']; 
                    $category =$row['category'];

                      echo "
                      <div class='aa-contact-top'>
                      <div class='aa-contact-top-left'>
                        <img src='uploads/$image' alt='img' width='100%' height='450'>
                        </div>
                        <div class='aa-contact-top-right'>
                        <a href='/PropertyDalal/properties-detail.php?pid=$pid'><h2>$name</h2></a>
                        <ul class='contact-info-list'>
                        
                            <li> <i class='fa fa-inr'></i> $price</li>
                            <li> <i class='fa flaticon-ruler'></i> $sqft sq/ft</li>
                            <li> <i class='fa fa-map-marker'></i> $address</li>   
                            <li> <i class='fa fa-home'></i> $type</li>
                            
                        </ul>
                        </div>
                        </div>
                        <br>
                        <hr width='10' style='border-top: 1px dashed red;'>
                        <br>
                   ";
                    }
                }
                if($result_counter==0){
                    echo "<h2 class='text-center'>Sorry, No matching properties found for your requirement.</h2>";
                }
            }
            ?>
            
          </div>
       </div>
     </div>
   </div>
 </section>


  <!-- Footer -->
  <?php include('footer.php'); ?>
  <!-- / Footer -->

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
</html>
