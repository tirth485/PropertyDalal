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
            <h2>My Listed Properties</h2>
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
            <div class="aa-contact-top">
              <!-- <div class="aa-contact-top-left">
                <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29344.41217949491!2d72.6634706280204!3d23.168319582268868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8019d43730db%3A0x7044e9a2cb290ed!2sGujarat%20International%20Finance%20Tec-City%2C%20Gujarat%20382355!5e0!3m2!1sen!2sin!4v1614184217209!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>></iframe>
              </div>
              <div class="aa-contact-top-right">
                <h2>Contact</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae placeat aspernatur aperiam, quisquam voluptas enim tempore ab itaque nam modi eos corrupti distinctio nobis labore dolorum quae tenetur. Sapiente, sequi.</p>
                <ul class="contact-info-list">
                  <li> <i class="fa fa-phone"></i> 7874720983</li>
                  <li> <i class="fa fa-envelope-o"></i> info@propertydalal.ac.in</li>
                  <li> <i class="fa fa-map-marker"></i> Gift city,Gandhinager</li>
                </ul>
              </div>
            -->
            </div>       
            <?php 
            
            
            $userid=$_SESSION['userid'];
            $stmt = $conn->prepare("Select * from Users where userid='$userid'");
            
            if($stmt->execute() === TRUE)
            {
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    $email=$row['email'];
                    $phone=$row['phone'];        
                }
            }

            $stmt = $conn->prepare("Select * from property where userid='$userid'");
            if($stmt->execute() === TRUE)
            {
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
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

                    // echo "
                    //   <h2>$name</h2>
                    //   <h4>$address</h2>
                    //   <span class='aa-price'>Price: $$price</span>
                    //   <br>
                    //   <span class='aa-price'>Size: $sqft/sqft</span>
                    //   <p>$description</p>
                    //   <h4>Propery Features</h4>
                    //   <ul>
                    //     <li>4 Bedroom</li>
                    //     <li>3 Baths</li>
                    //     <li>Kitchen</li>
                    //     <li>Air Condition</li>
                    //     <li>Belcony</li>
                    //     <li>Gym</li>
                    //     <li>Garden</li>
                    //     <li>CCTV</li>
                    //     <li>Children Play Ground</li>
                    //     <li>Comunity Center</li>
                    //     <li>Security System</li>
                    //   </ul>";
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
                            <li> <i class='fa fa-phone'></i> $phone</li>
                            <li> <i class='fa fa-envelope-o'></i> $email</li>
                        </ul>
                        </div>
                        </div>
                        <br>
                        <hr width='10' style='border-top: 1px dashed red;'>
                        <br>
                   ";
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