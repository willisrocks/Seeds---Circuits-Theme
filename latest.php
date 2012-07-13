<?php roots_loop_before(); ?>
<?php
$currentID = get_the_ID();
$my_query = new WP_Query( array('category_name' => 'article', 'showposts' => '5', 'post__not_in' => array($currentID)));
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