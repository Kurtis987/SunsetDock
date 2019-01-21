<?php get_header(); ?>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php
            global $post;
            $args = array( 'posts_per_page' => 3 );
            $lastposts = get_posts( $args );
            foreach ( $lastposts as $post ) :
              setup_postdata( $post ); ?>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php the_content(); ?>
            <?php endforeach; 
            wp_reset_postdata(); ?>
        </div><!-- /.blog-main --> 
        <?php get_sidebar(); ?>
      </div><!-- /.row -->
<?php get_footer(); ?>