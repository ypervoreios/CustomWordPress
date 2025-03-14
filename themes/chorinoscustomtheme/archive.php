<?php get_header(); ?>
<div class="row text-center">
        <h2><?php the_archive_title(); ?></h2>
    </div>
<div class="category-container">
<?php
while (have_posts()) {
    the_post(); ?>
    
        <div class="latest-post glass">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        </div>
<?php }
?>
</div>
<?php get_footer();?>