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
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
              
                <form method="POST" action="property_insert_handler.php"  enctype="multipart/form-data">                                                 
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



            