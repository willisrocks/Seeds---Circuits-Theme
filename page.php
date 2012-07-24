<?php get_header(); ?>
<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <h4>Latest Posts</h4>
        <?php roots_loop_before(); ?>
        <?php
        $my_query = new WP_Query( array('category_name' => 'article', 'showposts' => '5'));
        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="seeds_latest">
          <?php the_post_thumbnail('thumbnail'); ?></span>
          <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          <?php roots_entry_meta(); ?>
          <!-- <?php the_excerpt(); ?> -->
        </div>
        <hr>
        <?php endwhile; ?>
        <?php roots_loop_after(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>