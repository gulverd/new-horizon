    <div class="content" id="projects_maina" >
      <div class="projects">
        <div class="col-md-12 titlesectionwrp" id="font">
          <h2 class="section-title">პროექტები
            <a href="projects.php" class="link-arrow-2 pull-right">იხილეთ ყველა პროექტი <i class="icon ion-ios-arrow-right"></i></a>
          </h2>
        </div>
        <div class="col-md-12 gridswrpmain" id="font" data-aos="flip-up">
          <div class="grid-items js-isotope js-grid-items">

            <?php
              include 'admin/db.php';

              $query = "SELECT * FROM projects ORDER BY id DESC LIMIT 3";
              $run   = mysqli_query($conn,$query);

              while($row = mysqli_fetch_array($run)){
                $id    = $row['id'];
                $title = $row['name_geo'];
                $img   = $row['image'];
                $desc  = $row['about_geo'];

                echo 
                '
                <a href="project_detail.php?project_id='.$id.'">
                  <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="imgs/projects/'.$img.'" id="project_main_image">
                      <div class="project-hover">
                        <a href="project_detail.php?project_id='.$id.'">
                          <div class="project-hover-content">
                            <h3 class="project-title"><a href="project_detail.php?project_id='.$id.'" class="projectaaa">'.$title.'</a></h3>
                          <a href="project_detail.php?project_id='.$id.'">
                            <div class="col-md-12" id="build">

                            </div>
                          </a>
                          </div>
                        </a>
                      </div>
                      <a href="project_detail.php?project_id='.$id.'" class="link-arrow">იხილეთ პროექტი <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                </a>
                ';
              }
            ?>


          </div>
        </div>
      </div>
    </div>
  