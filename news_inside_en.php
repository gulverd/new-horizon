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
      $news_id = $_GET['news_id'];
      $query = "SELECT * FROM blog WHERE id = '$news_id'";
      $run   = mysqli_query($conn,$query);

      while($row = mysqli_fetch_array($run)){
        $blog_date  = $row['blog_date'];
        $blog_title = $row['titleENG'];
        $blog_text  = $row['textaENG']; 
        $image      = $row['img'];
      }
    ?>
    
    <!-- Jumbotron -->
    


    <div class="content" id="font">
      <div class="page-inner">
        <section class="section about-info">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="col-md-12">
                  <h2><?php echo $blog_title;?></h2>
                </div>
                <div class="col-md-12">
                  <?php echo substr($blog_date, 0,10);?>
                </div>
                <div class="col-md-12">
                  <img src="imgs/blog/<?php echo $image;?>" id="blog_image">
                </div>
                <div class="text-display-1">
                  <?php echo $blog_text;?>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="content">
                    <div class="projects">
                      <div class="container">
                        <div class="grid-items js-isotope js-grid-items">
                          <?php
                              include 'admin/db.php';
                              $query2 = "SELECT * FROM blog WHERE id != '$news_id' ORDER BY id DESC LIMIT 5 ";
                              $run2   = mysqli_query($conn,$query2);

                              while($row2 = mysqli_fetch_array($run2)){
                                $id      = $row2['id'];
                                $title   = $row2['titleENG'];
                                $pic     = $row2['img'];
                                $date    = $row2['blog_date'];
                                $desc    = $row2['textaENG'];
                                echo 
                                ' <div class="grid-item inspiration js-isotope-item js-grid-item">
                                    <div class="news-item">
                                      <img alt="" src="imgs/blog/'.$pic.'" id="main_blog_img">
                                      <div class="news-hover">
                                        <div class="hover-border"><div></div></div>
                                        <div class="content">
                                          <div class="time">'.$date.'</div>
                                          <h3 class="news-title">'.$title.'</h3>
                                          <p class="news-description">
                                            '.substr($desc, 0,200).' ... 
                                          </p>
                                        </div>
                                        <a class="read-more" href="news_inside_en.php?news_id='.$id.'">READ MORE</a>
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
              </div>
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
</body>
</html>