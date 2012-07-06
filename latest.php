<?php roots_loop_before(); ?>
<?php $limit = get_option('posts_per_page'); ?>
<?php query_posts('showposts=' . $limit . '&paged=' . $paged .'&cat=-4'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="seeds_latest">
      <?php the_post_thumbnail('thumbnail'); ?></span>
      <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
      <?php roots_entry_meta(); ?>
      <!-- <?php the_excerpt(); ?> -->
    </div>
    <hr>
  <?php endwhile;
endif; ?>
<?php roots_loop_after(); ?>