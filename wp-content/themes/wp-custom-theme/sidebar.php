<div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>February 1st, 2023</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore reiciendis nesciunt temporibus voluptatem porro et, aliquam omnis iste harum quis dolore, perferendis eveniet ad ipsum odio ullam ratione. Totam, nulla!<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="<?php echo get_template_directory_uri(); ?>/style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <?php
        while (have_posts()) {
          the_post();
          $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
      ?>

      <div class="blog-item">
        <img src="<?php echo $imagepath[0] ?>"/>
        <p><?php the_excerpt();?></p>
        <h2><?php the_title(); ?></h2>
        <p><?php echo get_the_date(); ?></p>
        <a href="<?php the_permalink(); ?>"><input type="button" value="Read More" name=""></a>
      </div>
      <?php  } ?>

      <?php echo wp_pagenavi(); ?>
    </div>