<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<header>
  <p class="h1"><?php bloginfo('name'); ?></p>
  <p class="h5"><?php bloginfo('description'); ?></p>
  <div class="container-sm">
      <nav class="main-menu">
      <?php wp_nav_menu( array('theme_location' => 'primary-menu')) ?>
      </nav>
  </div>
</header>
  <body>
    <main>

    