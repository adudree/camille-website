<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
</head>
<body>
<nav id="navigation">
  <div class="home-button">
    <a href="#">
      <img src="<?php echo get_site_icon_url(32, 'http://localhost/camille-website/wordpress/wp-content/uploads/2024/10/LOGO_A.png', 0); ?>" alt="logo" width=64 height="64" />
    </a>
  </div>
<?php
wp_nav_menu(
  array(
    'theme_location' => 'main-menu',
    'menu_id' => 'primary-menu',
 )
);
?>
</nav>
