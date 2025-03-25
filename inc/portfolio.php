<div class="portfolio_section layout_padding" id="portfolio">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="portfolio_taital">My <span class="portfolio_taital_1">Portfolio</span></h1>
               </div>
            </div>
            <div class="portfolio_section">
               <div class="portfolio_section_2">
                  <div class="row">
                     <?php foreach ($rowPortfolio as $portfolio) { ?>
                        <?php if ($portfolio['id'] % 2 == 0) { ?>
                           <div class="col-md-8">
                           <div class="container_main">
                           <img src="uploads/<?php echo $portfolio['portfolio_image']?>" alt="<?php echo $portfolio['portfolio_name']?>" class="image">
                           <div class="overlay">
                              <div class="text">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a target="_blank" title="<?php echo $portfolio['portfolio_name']?>" href="<?php echo $portfolio['portfolio_link']?>">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                        <?php } else { ?>
                           <div class="col-md-4">
                        <div class="container_main">
                           <img src="uploads/<?php echo $portfolio['portfolio_image']?>" alt="<?php echo $portfolio['portfolio_name']?>" class="image">
                           <div class="overlay">
                              <div class="text">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="<?php echo $portfolio['portfolio_link']?>" target="_blank">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                     </div>
                  </div>
               </div>  
                  </div>
               </div>
            <div class="seemore_bt"><a target="_blank" href="https://github.com/Dio-Damar-Danendra-Portofolio">See More</a></div>
         </div>
      </div>
</div>

