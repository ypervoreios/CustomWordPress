<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<header>
<div class="container-fluid">
<div class="row">
      <div class="col-md-6">
        <div class="top-menu justify-content-start">
        <?php wp_nav_menu( array('theme_location' => 'top-menu-left')) ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="top-menu justify-content-end">
        <?php wp_nav_menu( array('theme_location' => 'top-menu-right')) ?>
        </div>
      </div>
  </div>
<div class="row mt-5">
  <div class="col-md-12 text-center">
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
  </div>
</div>
<div class="row">
  <div class="col-md-6 justify-content-start">
  <?php
if (function_exists('the_custom_logo')) {
    the_custom_logo();
}
?>
  </div>
  <div class="col-md-6 justify-content-end">
      <nav class="main-menu">
      <?php wp_nav_menu( array('theme_location' => 'primary-menu')) ?>
      </nav>
  </div>
  </div>
  </div>
</header>
  <body>
    <main>

    