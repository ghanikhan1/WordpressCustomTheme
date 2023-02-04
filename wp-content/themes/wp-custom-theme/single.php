<?php 

	get_header();

?>
single

<div id="content_header"></div>
    <div id="site_content">
    <!--  <div id="banner"></div> -->
    <div> <img src="<?php echo get_template_directory_uri(); ?>style/banner.jpg"></div>
	  <?php get_sidebar(); ?>
    <div id="content_footer"></div>
<?php

	get_footer();

?>