
<div class="services_section layout_padding" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">My <span class="portfolio_taital_1">Projects</span></h1>
               </div>
            </div>
<<<<<<< HEAD
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
=======
         </div>
            <div class="services_section">
               <div class="portfolio_section_2">
                  <div class="row">
                     <div class="col-md-8">
                        <div class="container_main">
                           <img src="images/spesialterapi.png" style="align-items: center; min-width: 20%; min-height: 20%; max-width: 40%; max-height: 40%;"  alt="Spesial Terapi" class="image">
                           <div class="overlay">
                              <div class="text">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a target="_blank" title="Spesial Terapi" href="https://play.google.com/store/apps/details?id=com.spesialkaryamandiri.spesialterapi">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/EduSMA.png" title="EduSMA" alt="EduSMA" class="image">
                           <div class="overlay">
                              <div class="text">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a target="_blank" title="EduSMA" href="https://drive.google.com/file/d/1hqkSUudyyZLE_iDqV6b-tAtfdSoYR0c1/view?usp=sharing">See More</a></div>
>>>>>>> 250fbb1cc053c1750eff2acd66f43990a853f0ad
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
<<<<<<< HEAD
                           <?php }
                         } ?>
=======
>>>>>>> 250fbb1cc053c1750eff2acd66f43990a853f0ad
                  </div>
               </div>
            </div>
                  <div class="seemore_bt"><a title="Click for More Projects" target="_blank" href="https://github.com/Dio-Damar-Danendra-Portofolio">See More</a></div>
         </div>
      </div>
