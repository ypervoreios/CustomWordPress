<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<div class="container-sm">
  <p class="h1 text-center"><?php bloginfo('name'); ?></p>
  <p class="h5 text-center"><?php bloginfo('description'); ?></p>
</div>
  <div class="container-sm">
    <div class="row">
      <nav class="main-menu">
      <?php wp_nav_menu( array('theme_location' => 'primary-menu')) ?>
      </nav>
    </div>
  </div>
  