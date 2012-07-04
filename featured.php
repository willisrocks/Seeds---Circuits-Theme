<!-- That would be the start of the Featured post   -->

<div class="featured">
	<?php $my_query = new WP_Query('category_name=featured&showposts=1');
	while ($my_query->have_posts()) : $my_query->the_post();
	$do_not_duplicate = $post->ID; ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail('large'); ?>
				</a>
			<?php endif; ?>
			<?php roots_entry_meta(); ?>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; ?>
</div>

<!-- That would be the end of the Featured post   -->