<?php 
//  echo get_template_directory_uri();
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_horizon</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/style.css" />

  <?php wp_head(); ?> 
</head>

<body>
  <div id="main">
    <div id="header">
      <?php
        $logoimg = get_header_image();
      ?>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
    
            <a href="home">
              <img src="<?php echo $logoimg; ?>" class="logo">
            </a>
          
          
        </div>
      </div>
      <div id="menubar">
        <?php
          wp_nav_menu(array(
            'theme_location'=>'primary-menu',
            'menu_class'=>'nav'
          ))
         ?>
      </div>
    </div>