    <header class="navbar boxed js-navbar">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <div class="hamburger">
          <div class="top-bun"></div>
          <div class="meat"></div>
          <div class="bottom-bun"></div>
        </div>
      </button>

      <a class="brand" href="index.php">
        <img alt="" src="imgs/logo.png" id="logo">
      </a>

      <?php
        
        include 'admin/db.php';

        $query  = "SELECT * FROM contact";
        $run    = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($run)){
          $phone1    = $row['companyPhone'];
          $facebook  = $row['facebook'];
          $email     = $row['companyEmail1'];
          $mob1      = $row['companyMob1'];
        }

      ?>

      <div class="social-list hidden-xs">
        <a href="<?php echo $facebook;?>" class="icon ion-social-facebook" target="_blank"></a>
        <a mail to="<?php echo $email;?>"><?php echo $email;?></a>
      </div>

      <div class="navbar-spacer hidden-sm hidden-xs"></div>

      <address class="navbar-address hidden-sm hidden-xs">დაგვიკავშირდით: 
        <span class="text-dark">
          <?php echo $phone1 .' ; '. $mob1;?>
        </span>
      </address>
    </header>

