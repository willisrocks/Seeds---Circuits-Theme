<?php
/*
Template Name: Test2
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
		<?php include (TEMPLATEPATH . '/featured.php'); ?>
		<hr>
        <?php roots_loop_before(); ?>
			<?php $limit = get_option('posts_per_page');
			query_posts('showposts=' . $limit . '&paged=' . $paged .'&cat=-3'); ?>
			<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
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