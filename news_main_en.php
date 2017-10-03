  <div class="content">
    <div class="col-md-12 titlesectionwrp" id="font">
          <h2 class="section-title">NEWS 
          <a href="news_en.php" class="link-arrow-2 pull-right">VIEW ALL NEWS <i class="icon ion-ios-arrow-right"></i></a>
          </h2>
    </div>  
    <div class="col-md-12 gridswrpmain" id="font">
          <div class="projects">
              <div class="grid-items js-isotope js-grid-items" >
                <?php
                    include 'admin/db.php';
                    $query = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
                    $run   = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($run)){
                      $id      = $row['id'];
                      $title   = $row['titleENG'];
                      $pic     = $row['img'];
                      $date    = $row['blog_date'];
                      $desc    = $row['textaENG'];
                      echo 
                      ' <div class="grid-item inspiration js-isotope-item js-grid-item">
                          <div class="news-item">
                            <img alt="" src="imgs/blog/'.$pic.'" id="main_blog_img">
                            <div class="news-hover">
                              <div class="hover-border"><div></div></div>
                              <div class="content">
                                <div class="time">'.$date.'</div>
                                <h3 class="news-title"><a class="read-more-title" href="news_inside_en.php?news_id='.$id.'">'.$title.'</a></h3>
                                <p class="news-description">';
                                  if(strlen($desc) >= 290){
                                    echo mb_substr($desc, 0,290,'utf-8'). ' ... ';
                                  }else{
                                    echo $desc;
                                  }
                              echo '</p>
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

