<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>NEW-HORIZON</title> 

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
<link href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php include 'chat.php';?>
<div class="animsition">
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->
    <?php
      include 'sidebar_menu.php';
    ?>

    <!-- Navbar -->

    <?php 
      include 'navbar.php';
    ?>
    
    <!-- Jumbotron -->
    


    <div class="content" id="font">
      <div class="page-inner">
        
        <section class="section">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">ჩვენი გუნდი</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row-team row">
                <?php 
                  include 'admin/db.php';
                  $query  = "SELECT * FROM team";
                  $run    = mysqli_query($conn,$query);

                  while($row = mysqli_fetch_array($run)){
                    $empName  = $row['empNameGEO'];
                    $image    = $row['empImage'];
                    $position = $row['empPositionGEO'];
                    
                    echo
                    '
                      <div class="col-team col-xs-6 col-md-4">
                        <div class="team-profile">
                          <img alt="" src="imgs/employees/'.$image.'" id="emp_image">
                          <div class="team-hover">
                            <div class="team-content">
                              <div class="team-name">
                                <h6>'.$empName.'</h6>
                                <div class="team-spec">'.$position.'</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    ';
                  }

                ?>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- Footer -->

    <?php include 'footer.php';?>
  </div>
</div>

<!-- jQuery -->

<script src="js/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/sly.min.js"></script>


<!-- Slider revolution -->
<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- Slider revolution 5x Extensions   -->
<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>


<!-- Scripts -->
<script src="js/scripts.js"></script> 
<script src="js/rev-slider-init.js"></script>
</body>
</html>