<h3>Latest Posts</h3>
<ul class="latest-single">
  <?php
  $currentID = get_the_ID();
  $my_query = new WP_Query( array('category_name' => 'article', 'showposts' => '2', 'post__not_in' => array($currentID)));
  while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
      <div class="latest-overlay">
        <span><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
      </div>
    </li>
  <?php endwhile; ?>
</ul>