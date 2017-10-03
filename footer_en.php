  <div class="content">
    <div class="col-md-12 gridswrpmain" id="footer">
          <div class="projects">
       <div class="footer-flex">
        <div class="flex-item">
          <a class="pull-left" href="index.php">
            <img alt="" src="imgs/logo.gif" id="foot_logo">
          </a>
        </div>
        <div class="flex-item">
          <div class="inline-block" id="foot_block">© NEW-HORIZON.GE 2017<br></div>
        </div>
        <div class="flex-item">
          <ul>
            <li><a href="projects_en.php">PROJECTS</a></li>
            <li><a href="partners_en.php">PARTNERS</a></li>
            <li><a href="news_en.php">NEWS</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <ul>
            <li><a href="about_en.php">ABOUT US</a></li>
            <li><a href="contact_en.php">CONTACT</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <ul>
            <li><a href="index.php">GEO</a></li>
            <li><a href="index_en.php">ENG</a></li>
            <li><a href="index_ru.php">RUS</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <div class="social-list">
            <?php
              include 'admin/db.php';
              $query = "SELECT * FROM contact";
              $run   = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($run)){
                $facebook = $row['facebook']; 
              }
            ?>
            <a href="<?php echo $facebook;?>" class="icon ion-social-facebook" target="_blank"></a>
          </div>
        </div>
      </div>
          </div>
    </div>
  </div>
<!-- 
<div class="content">
  <footer id="footer" class="footer section"> 

  </footer>
</div> -->