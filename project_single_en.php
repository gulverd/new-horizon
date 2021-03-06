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
      $floor_id   = $_GET['project_floor'];
      $flat_id    = $_GET['flat_id'];

      $query      = "SELECT a.name_eng,a.about_eng,a.map
      FROM projects a
      WHERE a.id = '$project_id'";
      $run        = mysqli_query($conn,$query);

      while($row    = mysqli_fetch_array($run)){
        $project_name  = $row['name_eng'];
        $project_text  = $row['about_eng'];
        $project_map   = $row['map'];
      }

      $queryFLoor   = "SELECT * FROM projects_floors WHERE id = '$floor_id'";
      $runFloor     = mysqli_query($conn,$queryFLoor);

      while($rowFloor = mysqli_fetch_array($runFloor)){
        $floor_name   = $rowFloor['floor_name'];
      }

      $queryFlat   = "SELECT * FROM projects_flats WHERE id = '$flat_id'";
      $runFlat     = mysqli_query($conn,$queryFlat);

      while($rowFlat = mysqli_fetch_array($runFlat)){
        $flat_name   = $rowFlat['flat_name'];
        $flat_image  = $rowFlat['image'];
        $m2          = $rowFlat['m2'];
        $price       = $rowFlat['price'];
        $kvm_price   = $rowFlat['kvm_price'];
        $status      = $rowFlat['status'];
      }
    ?>
    
    <!-- Jumbotron -->
  

    <div class="content" id="font">
      <div class="page-inner">
        <section class="section about-info">
          <div class="container">
              <div class="col-md-12 project_in_title_wrp">
                <h1><?php echo $project_name;?> <span><?php echo $floor_name;?> </span>
                <span id="flat_name_span"> FLAT: <?php echo $flat_name;?></span></h1>
              </div>
                <div class="col-md-12 project_image_wrp">
                      <div class="col-md-12">
                          <div class="col-md-8">
                            <img src="imgs/projects_flats/<?php echo $flat_image;?>" id="flat_img">
                          </div>
                          <div class="col-md-4">
                            <div class="col-md-12 flat_font_size">
                              FLAT NUMBER : <strong><?php echo $flat_name;?></strong>
                            </div>
                            <div class="col-md-12 flat_font_size">
                              M2: <strong><?php echo $m2;?></strong>
                            </div>
                            <div class="col-md-12 flat_font_size">
                              M2 PRICE: <strong><?php echo $kvm_price;?></strong>
                            </div>
                            <div class="col-md-12 flat_font_size">
                              FLAT PRICE: <strong><?php echo $price;?></strong>
                            </div>
                          </div>
                        </div>
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
                          <iframe width="100%" height="350px" src="https://www.youtube.com/embed/'.$youtubeID.'" frameborder="0" allowfullscreen></iframe>
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

    <!-- Footer -->

    <?php include 'footer_en.php';?>
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
  <script type="text/javascript" src="admin/public/js/jquery.maphilight.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.building-image').maphilight();
    </script>
</body>
</html>