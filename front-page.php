<?php get_header(); ?>
<?php roots_content_before(); ?>
<div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
  <?php roots_main_before(); ?>
  <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
    <h4>Featured Post</h4>
    <?php include (TEMPLATEPATH . '/featured.php'); ?>
  </div><!-- /#main -->
  <?php roots_main_after(); ?>
  <?php roots_sidebar_before(); ?>
  <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
    <?php roots_sidebar_inside_before(); ?>
    <h4>Latest Posts</h4>
    <?php include (TEMPLATEPATH . '/latest.php'); ?>
    <?php roots_sidebar_inside_after(); ?>
  </aside><!-- /#sidebar -->
  <?php roots_sidebar_after(); ?>
</div><!-- /#content -->
<?php roots_content_after(); ?>
<?php get_footer(); ?>