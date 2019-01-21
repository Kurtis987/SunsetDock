<?php 
/**
* Template Name: front-page
**/

get_header(); ?>
      <div class="row">
        <div class="col-sm-12 blog-main">

        <section id="boats">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
            <div class="book">
                <p id="book-heading"><?php echo get_theme_mod('heading1', 'TAKE A MOMENT TO')?></p>
                <h1><?php echo get_theme_mod('heading2', 'Book Our Boats.')?></h1>
                <hr align="left" id="book-hr">
            <div class="img-container">
                  <div class="img-wrapper">
                  <div id="standard">
                  </div><!-- /standard -->
                     <div class="wrapper">
                      <h3 class="boat-info"><?php echo get_theme_mod('picture_caption1', "Smith's Standard")?></h3>
                      <h4 class="boat-info"><strong><?php echo get_theme_mod('picture_caption2', "FROM $149 A Day")?></strong></h4>
                    </div> <!-- /.wrapper -->
                  </div><!-- /img-wrapper -->

                <div class="img-wrapper">
                  <div id="exclusive">
                  </div><!-- /exclusive -->
                  <div class="wrapper">
                    <h3 class="boat-info"><?php echo get_theme_mod('picture_caption3', "Smith's Exclusive")?></h3>
                    <h4 class="boat-info"><strong><?php echo get_theme_mod('picture_caption4', "FROM $289 A Day")?></strong></h4>
                  </div> <!-- /.wrapper -->
                </div> <!-- /img-wrapper -->
            </div><!-- /img-container -->
            <button type="button" class="btn" id="availability"><?php echo get_theme_mod('button_text', "Check For Availability")?></button>
            </div><!-- /explore -->
            </div> <!-- /column -->
            </div> <!-- /.row -->
         </section>


        <section id="stats">
        <div class="row stats">
              <div class="col-sm-3"> 
                <img id="stats-logo" src="<?php echo get_theme_mod('section2_logo', get_bloginfo('template_url').'/images/logo.png')?>" width="200">
                <div class="stats-wrapper">
                <h1 class="stats-numbers"><?php echo get_theme_mod('stat1', "12")?></h1>
                <p class="stats-labels"><?php echo get_theme_mod('label1', "YEARS")?></p>
                            </div><!-- ./stats-wrapper -->
                    </div> <!-- /column -->
                    <div class="col-sm-3">
                <div class="stats-wrapper">
                  <h1 class="stats-numbers"><?php echo get_theme_mod('stat2', "1")?></h1>
                  <p class="stats-labels"><?php echo get_theme_mod('label2', "EXPERIENCE")?></p>
                            </div><!-- ./stats-wrapper -->
                <div class="stats-wrapper">
                  <h1 class="stats-numbers"><?php echo get_theme_mod('stat3', "700+")?></h1>
                  <p class="stats-labels"><?php echo get_theme_mod('label3', "HAPPY GUESTS")?></p>
                            </div><!-- ./stats-wrapper -->
                          </div> <!-- /column -->
                          <div class="col-sm-3">
                <div class="stats-wrapper">
                  <h1 class="stats-numbers"><?php echo get_theme_mod('stat4', "2")?></h1>
                  <p class="stats-labels"><?php echo get_theme_mod('label4', "BOATS")?></p>
                </div><!-- ./stats-wrapper -->
                <div class="stats-wrapper">
                  <h1 class="stats-numbers"><?php echo get_theme_mod('stat5', "5")?></h1>
                  <p class="stats-labels"><?php echo get_theme_mod('label5', "PARTNERS")?></p>
                            </div><!-- ./stats-wrapper -->
                          </div> <!-- /column -->
                    <div class="col-sm-3">
                <div class="stats-wrapper">
                  <h1 class="stats-numbers"><?php echo get_theme_mod('stat6', "2")?></h1>
                  <p class="stats-labels"><?php echo get_theme_mod('label6', "STAFF")?></p>
                            </div><!-- ./stats-wrapper -->
                            <div class="stats-wrapper">
                  <h1 class="stats-numbers"><?php echo get_theme_mod('stat7', "99%")?></h1>
                  <p class="stats-labels"><?php echo get_theme_mod('label7', "SATISFACTION")?></p>
                </div><!-- ./stats-wrapper -->
              </div> <!-- /column -->
          </div> <!-- /.row -->
          </section>


           <section class="discount">
               <p><?php echo get_theme_mod('paragraph1', "SUMMER SPECIAL")?></p>
                     <h1 id="discount-header"><?php echo get_theme_mod('section3_heading1', "Receive 15% off by booking today!")?></h1>
               <button type="button" class="btn"><?php echo get_theme_mod('buttontext1', "Learn About The Discount")?></button>
            </section><!-- /.discount -->

          <section id="reviews">
           <div class="reviews-wrapper">
         <div class="reviews-inner-wrapper">
          <div class="reviews">
                  <h1 class="reviews-heading"><?php echo get_theme_mod('section4_heading', "Reviews")?></h1> 
            <div class="row">
             <div class="col-sm-8 col-sm-offset-2">
                   <img class="user-img" src="<?php echo get_theme_mod('img1', get_bloginfo('template_url').'/images/testimonial-1.jpg')?>" />
             <p class="name"><?php echo get_theme_mod('name1', "Ashley W.")?></p>
                   <p class="testimonial"><?php echo get_theme_mod('review1', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.")?></p>
                   </div><!-- /column -->
                  </div><!-- /row -->
                  <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                   <img class="user-img" src="<?php echo get_theme_mod('img2', get_bloginfo('template_url').'/images/testimonial-2.jpg')?>" />
             <p class="name"><?php echo get_theme_mod('name2', "William B.")?></p>
                   <p class="testimonial"><?php echo get_theme_mod('review2', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.")?></p>
                   </div><!-- /column -->
                  </div><!-- /row -->
                  <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                   <img class="user-img" src="<?php echo get_theme_mod('img3', get_bloginfo('template_url').'/images/testimonial-3.jpg')?>" />
             <p class="name"><?php echo get_theme_mod('name3', "Samantha C.")?></p>
                   <p class="testimonial"><?php echo get_theme_mod('review3', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.")?></p>
                   </div><!-- /column -->
                  </div><!-- /row -->
                  <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                   <img class="user-img" src="<?php echo get_theme_mod('img4', get_bloginfo('template_url').'/images/testimonial-4.jpg')?>" />
             <p class="name"><?php echo get_theme_mod('name4', "Taron L.")?></p>
                   <p class="testimonial"><?php echo get_theme_mod('review4', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.")?></p>
                   </div><!-- /column -->
                  </div><!-- /row -->
                  <button type="button" class="btn"><?php echo get_theme_mod('section4_button_text', "Join These Happy Customers - Book Now!")?></button>
                </div><!-- /reviews -->
                </div><!-- /reviews-inner-wrapper -->
          </div><!-- /reviews-wrapper -->
          </section><!-- /portfolio -->

 
        
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
<?php get_footer(); ?>