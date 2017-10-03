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
      $project_id = $_GET['project_id'];

      $query      = "SELECT name_eng
      FROM projects 
      WHERE id = '$project_id'";
      $run        = mysqli_query($conn,$query);

      while($row    = mysqli_fetch_array($run)){
        $project_name  = $row['name_eng'];
      }
    ?>
    
    <!-- Jumbotron -->
  

    <div class="content" id="font">
      <div class="page-inner">
        <section class="section about-info">
          <div class="container">
              <div class="col-md-12">
                <h1><?php echo $project_name;?></h1>
              </div>
                <div class="col-md-12 project_image_wrp">
                  
                  <?php

                    $query      = "SELECT 
                    a.name_eng,a.about_eng,a.image,a.map,
                    c.coordinates as coordinates, c.id as floor_id
                    FROM projects a 
                    JOIN projects_floors c   on a.id = c.projectID
                    WHERE a.id = '$project_id'";



                    $run        = mysqli_query($conn,$query);

                    if(mysqli_num_rows($run) >=1){
                      echo '<map name="building-map">';
                      while($row    = mysqli_fetch_array($run)){
                        $project_text  = $row['about_eng'];
                        $project_image = $row['image'];
                        $project_map   = $row['map'];
                        $coordinates   = $row['coordinates'];
                        $fl_id         = $row['floor_id'];
                        echo '<area imga="imgs/projects/'.$project_image.'" shape="poly" coords="'.$coordinates.'" href="project_floor_en.php?project_id='.$project_id.'&floor_id='.$fl_id.'">';
                      }
                      echo '</map>';
                    }else{

                      $query      = "SELECT 
                      a.name_eng,a.about_eng,a.image,a.map
                      FROM projects a 
                      WHERE a.id = '$project_id'";

                      $run        = mysqli_query($conn,$query);      
                        while($row    = mysqli_fetch_array($run)){
                          $project_text  = $row['about_eng'];
                          $project_image = $row['image'];
                          $project_map   = $row['map'];
                        }

                    }

                  ?>

                  <img src="imgs/projects/<?php echo $project_image;?>" id="project_image" class="building-image" usemap="#building-map" >
                </div>
                <div class="col-md-12">
                  <h4>PROJECT DESCRIPTION</h4>
                </div>
                <div class="col-md-12">
                  <?php echo $project_text;?>
                </div>
                <div class="col-md-12">
                  <h4>PROJECT GALLERY</h4>
                </div>
                <div class="col-md-12">
                  <?php
                    $query2 = "SELECT * FROM projectspictures WHERE projectID = '$project_id'";
                    $run2   = mysqli_query($conn,$query2);

                    while($row2 = mysqli_fetch_array($run2)){
                      $gal_pic  = $row2['image'];
                      echo '<div class="col-md-4" id="gal_image_wrp">';
                        echo '<img src="imgs/galery/'.$gal_pic.'" id="gal_image">';
                      echo '</div>';
                    } 
                  ?>
                </div>
                <div class="col-md-12">
                  <h4>PROJECT VIDEO</h4>
                </div>
                <div class="col-md-12">
                  <?php
                    $query3 = "SELECT * FROM projectsvideos WHERE projectID = '$project_id'";
                    $run3   = mysqli_query($conn,$query3);

                    while($row3 = mysqli_fetch_array($run3)){
                      $videoURL  = $row3['videoURL'];
                      $youtubeID = substr(ltrim($videoURL),32); 
                      echo '<div class="col-md-12" id="gal_image_wrp">';
                        echo '
                          <iframe width="100%" height="450px" src="https://www.youtube.com/embed/'.$youtubeID.'" frameborder="0" allowfullscreen></iframe>
                        ';

                      echo '</div>';
                    } 
                  ?>
                </div> 
                <div class="col-md-12">
                  <h4>PROJECT LOCATION</h4>
                </div>
                <div class="col-md-12">
                  <img src="imgs/<?php echo $project_map;?>" id="map_project">
                </div>


          </div>
        </section>
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
  <script type="text/javascript" src="admin/public/js/jquery.maphilight.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.building-image').maphilight();
    </script>
</body>
</html>