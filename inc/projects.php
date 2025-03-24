
<div class="services_section layout_padding" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">My <span class="portfolio_taital_1">Projects</span></h1>
               </div>
            </div>
            </div>
            </div>
            <div class="services_section">
               <div class="portfolio_section_2">
                  <div class="row">
                     <?php foreach ($rowProject as $projects) { 
                        if ($projects['id'] % 2 == 0) { ?>
                           <div class="col-md-8">
                           <div class="container_main">
                           <img src="uploads/<?php echo $projects['project_image'] ?>" style="align-items: center; min-width: 20%; min-height: 20%; max-width: 40%; max-height: 40%;"  alt="<?php echo $projects['project_name'] ?>" class="image">
                           <div class="overlay">
                              <div class="text">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a target="_blank" title="<?php echo $projects['project_name'] ?>" href="<?php echo $projects['project_link'] ?>">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                           </div>
                        <?php } else { ?>
                           <div class="col-md-4">
                        <div class="container_main">
                           <img src="uploads/<?php echo $projects['project_image'] ?>" title="<?php $projects['project_name'] ?>" alt="<?php echo $projects['project_name'] ?>" class="image">
                           <div class="overlay">
                              <div class="text">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a target="_blank" title="<?php echo $projects['project_name'] ?>" href="<?php echo $projects['project_link'] ?>">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                           <?php }
                         } ?>
                  </div>
               </div>
            </div>
                  <div class="seemore_bt"><a title="Click for More Projects" target="_blank" href="https://github.com/Dio-Damar-Danendra-Portofolio">See More</a></div>
         </div>
      </div>
