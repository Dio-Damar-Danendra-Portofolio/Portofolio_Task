<div class="services_section layout_padding" id="skills">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">My <span class="portfolio_taital_1">Skills</span></h1>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="services_section_2">
               <div class="row">
                  <?php foreach ($rowSkill as $skill) { ?>
                     <?php if ($skill['category'] == "Web Programming (Frontend)" || $skill['category'] == "Web Programming (Backend)") { ?>
                        <div class="col-lg-3 col-sm-6">
                           <div class="box_main">
                              <div class="app_icon"><img src="images/icon-3.png"></div>
                           <div class="app_icon_1"><img src="images/icon-7.png"></div>
                           <h4 class="services_text"><?php echo $skill['skill_type']?></h4>
                        </div>
                     </div>
                        <?php } else { ?>
                           <div class="col-lg-3 col-sm-6">
                              <div class="box_main ">
                              <div class="app_icon"><img src="images/icon-4.png"></div>
                              <div class="app_icon_1"><img src="images/icon-8.png"></div>
                              <h4 class="services_text"><?php echo $skill['skill_type']?></h4>
                           </div>
                        </div>
                        <?php } ?>
                  <?php } ?>
               </div>
               <div class="readmore_bt"><a target="_blank" title="Click for More Skills" href="https://drive.google.com/file/d/1ZSZVgzLhVKgphmPhpL1rRlW4zieUUT6a/view?usp=sharing">Read More</a></div>
            </div>
         </div>
      </div>
      