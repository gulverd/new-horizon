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

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->
    <?php
      include 'sidebar_menu_en.php';
    ?>

    <!-- Navbar -->

    <?php 
      include 'navbar_en.php';
    ?>
    <!-- Jumbotron -->
<div class="col-md-12 project_in_wrp">
     <div class="content">
      <div class="projects">
        <div class="col-md-12 titlesectionwrp" id="font">
          <h2 class="section-title">PROJECTS
          </h2>
        </div>
        <div class="col-md-12 gridswrpmain" id="font">
          <div class="grid-items js-isotope js-grid-items">

            <?php
              include 'admin/db.php';

              $query = "SELECT * FROM projects ORDER BY id DESC LIMIT 3";
              $run   = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($run)){
                $id    = $row['id'];
                $title = $row['name_eng'];
                $img   = $row['image'];
                $desc  = $row['about_eng'];

                echo 
                '
                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="imgs/projects/'.$img.'" id="project_main_image">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <h3 class="project-title"><a href="project_detail_en.php?project_id='.$id.'" class="projectaaa">'.$title.'</a></h3>
                      </div>
                    </div>
                    <a href="project_detail_en.php?project_id='.$id.'" class="link-arrow">VIEW PROJECT <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>
                ';
              }
            ?>


          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Footer -->

    <?php include 'footer_en.php';?>
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