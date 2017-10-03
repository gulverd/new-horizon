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
      include 'sidebar_menu_ru.php';
    ?>

    <!-- Navbar -->

    <?php 
      include 'navbar_ru.php';
    ?>
    
    <!-- Jumbotron -->
    <?php
      include 'admin/db.php';
      $query = "SELECT * FROM contact";
      $run   = mysqli_query($conn,$query);

      while($row = mysqli_fetch_array($run)){
        $companyPhone   = $row['companyPhone'];
        $companyEmail1  = $row['companyEmail1'];
        $companyEmail2  = $row['companyEmail2'];
        $companyName    = $row['companyName'];
        $companyMob1    = $row['companyMob1'];
        $facebook       = $row['facebook'];
        $map            = $row['mapx'];
        $companyAddress = $row['companyAddress'];

      }
    ?>
    
    <div class="content" id="font">
      <div class="col-md-12">
        <img src="imgs/gldanilocation.PNG" width="100%">
      </div>
      <div class="page-inner">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12 contact_wrpa">
                <div class="row-contact row">
                  <div class="col-contact col-lg-7 contact_mess_wrp">
                    <form action="" method="POST">
                    <div class="row">
                      <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="text" name="name" required placeholder="Имя и Фамилия">
                      </div>
                      <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="email" name="email" placeholder="Email">
                      </div>
                      <div class="form-group col-sm-12 col-lg-4">
                        <input class="input-gray" type="text" name="subject" placeholder="Тема">
                      </div>
                      <div class="form-group col-sm-12">
                        <textarea class="input-gray" name="message"  required  placeholder="Сообщение"></textarea>
                      </div>
                      <div class="col-sm-12">
                        <input type="submit" name="submit" class="btn-upper btn-yellow btn" value="Отправить">
                      </div>
                    </div>
                    <div class="success-message"><i class="fa fa-check text-primary"></i> მადლობა. თქვენი მესიჯი წარმატებით გაიგზავნა</div>
                    <div class="error-message">სამწუხაროდ არ მოხერხდა მესიჯის გაგზავნა!</div>
                  </form>
                  </div>
                  <div class="col-contact col-lg-5">
                    <div class="col-md-12 contact_dagv_wrp">
                      <h4>СВЯЖИТЕСЬ С НАМИ:</h4>
                    </div>
                    <div class="col-md-6 contact_details_wrp">
                      <p><?php echo $companyPhone;?></p>
                      <p><?php echo $companyMob1;?></p>
                      <p><?php echo $companyEmail1;?></p>
                    </div>
                    <div class="col-md-6 contact_working_wrp">
                      <p>РАБОЧЕЕ ВРЕМЯ</p>
                      <p class="working_hours">ПОНЕДЕЛЬНИК - ПЯТНИЦА: </br> 09:00 - 18:00</p>
                    </div>
                    <div class="col-md-12 contact_working_wrp">
                        <p>СОЦИАЛЬНАЯ СЕТЬ</p>
                        <p class="social_wpr">
                          <a href="<?php echo $facebook;?>" target="_blank" class="icon ion-social-facebook"></a>
                        </p>
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
      <?php include 'footer_ru.php';?>
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

<?php
  
  if(isset($_POST['submit'])){
    $name    = $_POST['name'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    if($subject == ''){
      $subject = 'WITHOUT SUBJECT';
    }
    $email   = $_POST['email'];


    $headers = "Content-Type: text/html; charset=utf-8";

    $message = "<html><body>";
    $message .= "<table> <tr><td><strong>FULL NAME</strong> </td><td>" . $name."</td></tr></table>";
    $message .= "<table> <tr><td><strong>EMAIL</strong> </td><td>" . $email."</td></tr></table>";
    $message .= "<table> <tr><td><strong>SUBJECT</strong> </td><td>" . $subject."</td></tr></table>";
    $message .= "<table> <tr><td><strong>TEXT</strong> </td><td>" . $message."</td></tr></table>";
    $message .= "</body></html>";

    mail('office@new-horizon.ge', 'CONTACT FORM: '.$subject,$message, $headers);
  }

?>