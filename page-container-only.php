<?php
/*
Template Name: Container Only
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content">
    <?php roots_main_before(); ?>
      <div id="main" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page-container-only'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>