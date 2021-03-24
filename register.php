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
  <body>   
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div>  
              <a href="index.php"><i style="color:white;font-size: 23px;" class="fa fa-home" aria-hidden="true"> Home</i></a>
            </div>
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
              <?php 
              session_start();
              if(isset($_SESSION['email_exist'])){
                echo "<div class=' alert-danger text-center'><br>Email already exist. <br><br></div>";
                unset($_SESSION['email_exist']);
              }
              ?>
                <a class="aa-property-home" href="index.html">Property Dalal</a>
                <h4>Create your account and Stay with us</h4>
              </div>
              
              <form class="contactform" method="POST" action="./register_handler.php" name="form1">                                                 
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="name">
                </div>

                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">
                </div>

                

                <div class="aa-single-field">
                  <label for="name">City <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="city">
                </div>
                
                <div class="form-group">
                  <div class=".col-sm-4 aa-single-field" >
                    <label for="type">Type of User: <span class="required">*</span></label><br>
                    <div class="form-check form-check-inline" style="padding-right:10% ;">
                      
                      <input class="form-check-input" type="radio" id="agent" name="type" value="agent">
                      <label for="age1">Agent</label><br>
                    </div>
                    
                    <div class="form-check form-check-inline" style="padding-right:10% ;">
                      
                      <input class="form-check-input" type="radio" id="builder" name="type" value="builder">
                      <label for="age2">Builder</label><br>  
                    </div>

                    <div class="form-check form-check-inline">
                      
                      <input class="form-check-input" type="radio" id="individual" name="type" value="individual" selected>
                      <label for="age3">Individual</label><br><br>
                    </div>
                  </div>
                  <div class=".col-sm-6 aa-single-field">
                    <label for="name">Phone <span class="required">*</span></label>
                    <input type="number" style="width: 100%;" required="required" aria-required="true" value="" name="phone">
                  </div>
                </div>
                
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> 
                </div>
                
                <div class="aa-single-field">
                  <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                  <input type="password" id="confirm-password" name="confirm-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> 
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit" id="submit" onclick="return CheckPassword()"/>                   
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
    
  <script>
    function CheckPassword() 
    {
        let inputVal1 = document.getElementById("password").value;
        let inputVal2 = document.getElementById("confirm-password").value;
        if(inputVal1 == inputVal2)
        {
          return true;
        }
        else
        {
          alert("Both Password does not match");
          return false;
        }
    }
</script>
</html>