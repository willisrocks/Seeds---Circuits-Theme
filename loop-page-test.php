 <?php $temp_query = clone $wp_query; ?>
 <!-- Do stuff... -->
 
 <?php query_posts('category_name=featured&posts_per_page=1'); ?>
 
 <?php while (have_posts()) : the_post();
	$do_not_duplicate = $post->ID;?>
		<?php roots_post_before(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php roots_post_inside_before(); ?>
		  <header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php roots_entry_meta(); ?>
		  </header>
		  <div class="entry-content">
			<?php the_excerpt(); ?>
		  </div>
		  <footer>
			<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
		  </footer>
		<?php roots_post_inside_after(); ?>
		</article>
	  <?php roots_post_after(); ?>
 <?php endwhile; ?>
 <?php endif; ?>
 
 // now back to our regularly scheduled programming
 <?php $wp_query = clone $temp_query; ?>
 if( $post->ID == $do_not_duplicate ) continue; ?>
   <?php roots_post_before(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php roots_post_inside_before(); ?>
	  <header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php roots_entry_meta(); ?>
	  </header>
	  <div class="entry-content">
		<?php the_excerpt(); ?>
	  </div>
	  <footer>
		<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
	  </footer>
	<?php roots_post_inside_after(); ?>
	</article>
  <?php roots_post_after(); ?>
 <?php endwhile; endif; ?>