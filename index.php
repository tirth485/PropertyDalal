<!DOCTYPE html>
<html lang="en">
  <!-- Start header section -->
  <?php 
  session_start();
  require('header.php');
  require_once('connection.php');
  ?>
  <!-- End header section -->
  <script>
    function change_active(){
      var someElement= document.getElementById("nav_home");
      someElement.className += " active";
    }
  </script>
  <body onload="change_active()">
  <!-- Start menu section -->

  <!-- End menu section -->

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        

        <?php 
          // $stmt = $conn->prepare("Select name,price,type,address,image,sqft from property");
          // $stmt->bind_result($pname,$price,$ptype,$paddress,$pimage,$sqft);
          $stmt = $conn->prepare("Select pid,name,price,type,address,image,sqft,description,category from property;");
          $stmt->bind_result($pid,$pname,$price,$ptype,$paddress,$pimage,$sqft,$description,$category);
          $stmt->execute();
          $stmt->store_result();
          $result_size=$stmt->num_rows;
          $stmt->execute();
          $i=0;
          
          while($i<$result_size){
          $stmt->data_seek($i);
          $stmt->fetch();
          // echo $pname."-".$price."-".$ptype."-".$paddress."-".$pimage;
          $i++;
        
        
          echo "
          <div class='aa-top-slider-single'><img src='uploads/$pimage' alt='img'>
          
          <div class='aa-top-slider-content'>
            <span class='aa-top-slider-catg'>$sqft</span>
            <h2 class='aa-top-slider-title'> $pname</h2>
            <p class='aa-top-slider-location'><i class='fa fa-map-marker'></i> $paddress</p>
            <span class='aa-top-slider-off'> $ptype</span>
            <p class='aa-top-slider-price'>&#8377 $price</p>
            <a href='#' class='aa-top-slider-btn'>Read More <span class='fa fa-angle-double-right'></span></a>
          </div></div>
         ";
        } ?>
          <!-- / Top slider content -->
        </div>
      
      </div>
    
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <form name="frmSearch" method="post" action="advancesearch.php">
  <section id="aa-advance-search">
    <div class="container" >
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" name="city" placeholder="Type Your Location">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="category">
                   <option value="0" selected>Category</option>
                    <option value="flat">Flat</option>
                    <option value="land">Land</option>
                    <option value="plot">Plot</option>
                    <option value="comercial">Commercial</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                 <div class="aa-single-advance-search">
                  <select name="type">
                    <option value="0" selected>Type</option>
                    <option value="Sell">Sell</option>
                    <option value="Rent">Rent</option>
                  </select>
              </div>
            </div>
            <div class="col-md-3">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search" name="submit">
                </div>
            </div>
          </div>
        </div>
         <!-- <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-6">
            
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">10000.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">100.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">10000  .00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>
            </div>
          </div>   -->
         </div>
        </div>
      </div>
    </div>
  </section>
  </form>
  
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="img/logopd.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Us</h2>
                    <span></span>
                  </div>
                  <p>At Property Dalal, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.</p>                  
                  <p>Our goal is to assist people make wiser decisions about their real estate investment - whether it's buying a property, selling, renting, leasing, investing or financing - it's all about empowering people with data and information in order to make most profitable decision.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

  <!-- Latest property -->
   <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
          
           
           
        <?php 
          $stmt->execute();
          $stmt->store_result();
          $result_size=$stmt->num_rows;
          $stmt->execute();
          $i=0;
          
          while($i<$result_size){
          $stmt->data_seek($i);
          $stmt->fetch();
          
          $i++;
        
        
          echo "
            <div class='col-md-4'>
              <article class='aa-properties-item'>
                <a href='#' class='aa-properties-item-img'>
                  <img src='uploads/$pimage' alt='img'>
                </a>
                <div class='aa-tag for-sale'>
                  For $ptype
                </div>
                <div class='aa-properties-item-content'>
                  <div class='aa-properties-info'>
                    <span>$category</span>
                    <span>$sqft SQ FT</span>
                  </div>
                  <div class='aa-properties-about'>
                    <h3><a href='#'>$pname</a></h3>
                    <p>$description</p>                      
                  </div>
                  <div class='aa-properties-detial'>
                    <span class='aa-price'>
                    ₹$price
                    </span>

                    <a href='/PropertyDalal/properties-detail.php?pid=$pid' class='aa-secondary-btn'>View Details</a>
                  </div>
                </div>
              </article>
            </div>
            ";
          }
         ?>
 
         </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- / Latest property -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Dalal</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Rent</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Development</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Market Analysis</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->

  <?php include('footer.php'); ?>

 
  
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