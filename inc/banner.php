<div class="banner_section layout_padding">
            <section class="slide-wrapper">
               <div class="container-fluid">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="<?php echo $first ? 'active' : ''; ?>"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="<?php echo $first ? 'active' : ''; ?>"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="<?php echo $first ? 'active' : ''; ?>"></li>
                        <li data-target="#myCarousel" data-slide-to="3" class="<?php echo $first ? 'active' : ''; ?>"></li>
                     </ol>
                     <div class="carousel-inner">
                           <?php
                              $first = true;
                           foreach ($rowProfession as $professions) { ?>
                              <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                              <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="banner_taital_main">
                                       <h3 class="banner_text">Hello, my name is <br>Dio Damar Danendra</h3>
                                       <h1 class="banner_taital">I am <?php echo $professions['profession_type']?></h1>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                 <div class="social_icon">
                                       <ul>
                                          <li><a href="https://facebook.com/dio.damar" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                          <li><a href="https://twitter.com/DioDamar" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                          <li><a href="https://linkedin.com" target="_blank" title="Tidak bisa diakses (diretas)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                          <li><a href="https://instagram.com/diodamar" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                       </ul>
                                 </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php $first = false; // Make sure only the first item is active 
                        } ?>
                     </div>
                  </div>
               </div>
            </section>
            <div class="container">
               <div class="video_bt">
                  <div class="play_icon"><img src="images/play-icon.png" class="carousel-control" role="button" onclick="animasi()"></div>
               </div>
            </div>
         </div>