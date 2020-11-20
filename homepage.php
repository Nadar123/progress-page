<?php
  /* Template Name: Homepage Template */
  get_header();
?>


<div class="body-container columns">
  <div class="column is-9 main-dashboard">
  <?php get_template_part('./template-parts/progressBar'); ?>
  </div>
  <div class="column is-3 dashboard-years">
 <?php get_template_part('./template-parts/yearsSilder'); ?>
  </div>
</div>

<?php get_footer(); ?>
