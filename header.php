<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    // Output our site title.
    bloginfo('name');
    // Show page info (if available.)
    if ($current_post_title = get_the_title()) {
      echo ' | ' . $current_post_title;
    }
    ?>
  </title>
  <?php wp_head(); // ALL WP styles, scripts, meta, etc. will output here. 
  ?>
</head>

<body>
  <h1>
    <?php
    // Output our site title.
    bloginfo('name');
    // Show page info (if available.)
    if ($current_post_title = get_the_title()) {
      echo ' | ' . $current_post_title;
    }
    ?>
  </h1>
  <nav>
    <h2>Website Navigateion (Main Menu)</h2>

    <?php // Output "main menu" 
    wp_nav_menu(array('theme_location' => 'main_menu'));
    ?>
  </nav>