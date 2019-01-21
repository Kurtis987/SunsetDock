<?php get_header(); ?>
<div id="content">
  <?php if (have_posts()) : the_post(); ?>
    <h2 class="maintitle">
      <?php edit_post_link('<img class="edit" width="16" height="16" alt="' . __('Edit post', 'sunset') . '" src="' . get_bloginfo('stylesheet_directory') . '/images/icon_post_edit.png" />'); ?>
      <a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'sunset'); ?> <?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="postmeta">
      <?php _e('By', 'sunset'); ?> <?php the_author_posts_link('namefl'); ?> <?php _e('on', 'sunset'); ?> <?php the_date(); ?> <?php _e('at', 'sunset'); ?> <?php the_time(); ?> <?php _e('in', 'sunset'); ?> <?php the_category(__(',', 'sunset') . ' ') ?>
    </div>
    <div class="post">
      <?php the_content(''); ?>
    </div>
    <?php the_tags('<p class="tags"><strong>' . __('Tags:', 'sunset') . '</strong> ', __(',', 'sunset') . ' ', '</p>'); ?>
    <?php comments_template(); ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>