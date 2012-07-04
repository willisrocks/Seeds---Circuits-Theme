<?php
/*
Template Name: Test
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
			<?php $featured_query = new WP_Query('category_name=featured&posts_per_page=1');
			while ($featured_query->have_posts()) : $featured_query->the_post();
			$do_not_duplicate = $post->ID;?>
				<?php roots_post_before(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php roots_post_inside_before(); ?>
					  <header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php roots_entry_meta(); ?>
					  </header>
					  <div class="entry-content">
						<?php if (is_archive() || is_search()) { ?>
						  <?php the_excerpt(); ?>
						<?php } else { ?>
						  <?php the_content(); ?>
						<?php } ?>
					  </div>
					  <footer>
						<?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
					  </footer>
					<?php roots_post_inside_after(); ?>
					</article>
				  <?php roots_post_after(); ?>
			<?php endwhile; ?>
				<hr>
			<?php roots_loop_before(); ?>
			<?php $article_query = new WP_Query('category_name=article&posts_per_page=4');
			while ($article_query->have_posts()) : $article_query->the_post();
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
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php get_sidebar(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>