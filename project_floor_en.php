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
      $floor_id   = $_GET['floor_id'];

      $query      = "SELECT a.name_eng
      FROM projects a
      WHERE a.id = '$project_id'";
      $run        = mysqli_query($conn,$query);

      while($row    = mysqli_fetch_array($run)){
        $project_name  = $row['name_eng'];
      }
      $queryFLoor   = "SELECT * FROM projects_floors WHERE id = '$floor_id'";
      $runFloor     = mysqli_query($conn,$queryFLoor);

      while($rowFloor = mysqli_fetch_array($runFloor)){
        $floor_name   = $rowFloor['floor_name'];
      }
    ?>
    
    <!-- Jumbotron -->
  

    <div class="content" id="font">
      <div class="page-inner">
        <section class="section about-info">
          <div class="container">
              <div class="col-md-12 project_in_title_wrp">
                <h1><?php echo $project_name;?> <span><?php echo $floor_name;?></span></h1>
              </div>
              <div class="col-md-12">
                <?php 
                  $query2 = "SELECT * FROM projects_flats WHERE projectID = '$project_id' AND floorID = '$floor_id'";
                  $run2   = mysqli_query($conn,$query2);

                  while($row2 = mysqli_fetch_array($run2)){
                    $flat_id   = $row2['id'];
                    $flat_name = $row2['flat_name'];
                    $m2        = $row2['m2'];
                    $price     = $row2['price'];
                    $kvm_price = $row2['kvm_price'];
                    $flat_img  = $row2['image'];
                    $status    = $row2['status'];

                    echo
                    '<a href="project_single_en.php?project_id='.$project_id.'&project_floor='.$floor_id.'&flat_id='.$flat_id.'">
                      <div class="col-md-6 flat_main_wrp">
                        <div class="col-md-12 flat_wrp">
                          <div class="col-md-8">
                            <img src="imgs/projects_flats/'.$flat_img.'" id="flat_img">
                          </div>
                          <div class="col-md-4">
                            <div class="col-md-12">
                              FLAT NUMBER : '.$flat_name.'
                            </div>
                            <div class="col-md-12">
                              M2 : '.$m2.'
                            </div>
                            <div class="col-md-12">
                              M2 PRICE: '.$kvm_price.'
                            </div>
                            <div class="col-md-12">
                              FLAT PRICE: '.$price.'
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    ';
                  } 

                ?>
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