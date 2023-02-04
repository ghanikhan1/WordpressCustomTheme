<?php
	get_header();
	the_post();
?>
page.php

    <div id="content_header"></div>
    <?php get_sidebar(); ?>
    <div id="site_content">
    
      <div id="content">
        <!-- insert the page content here -->
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        
        <?php the_post_thumbnail(array(500,500)); ?>

         <?php the_content(); ?>

         <?php $imagepath =
         wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
         
          ?>
          <img src="<?php echo $imagepath[0]; ?>" width = "700"/>
        
      </div>
    </div>


<?php 
	get_footer();
?>