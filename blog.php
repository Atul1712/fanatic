<?php
/* Template Name: blog */
  get_header(); ?>

<div class="tfc-news">
    <div class="tfc-container">
        <div class="tfccreate-acount-main">
            <?php do_action('breadcrumb');?>
        </div>
        <?php do_action('categorypost');?>
    </div>
</div>
<?php get_footer();?>