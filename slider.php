   
    <main class="jumbotron slider_jumb">

      <!-- Start revolution slider -->
      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
          <ul>
          <?php
                include 'admin/db.php';
                $query  = "SELECT * FROM slider_bg";
                $run    = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($run)){
                    $pic     = $row['pic'];
                    $caption = $row['captionGEO']; 
                    $descGeo = $row['descGEO'];
                    echo '
                    <li  data-transition="slotzoom-horizontal"  data-slotamount="6" data-masterspeed="1000" data-fsmasterspeed="1000">
                    <img src="imgs/slideshow/'.$pic.'" data-bgparallax="5"  alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                      <div class="sliderCaption">
                        <h1>'.$caption.'</h1>
                        <p>'.$descGeo.'</p>
                      </div>
                    </li>';
                }
          ?>
          </ul>
        </div>
      </div>
    </main>