<?php get_header(); ?>
    <div class="container-sm mt-5 mb-5">
        <h2><?php the_archive_title(); ?></h2>
    </div>
    <div class="container-sm">
<?php
while (have_posts()) {
    the_post(); ?>
        <div class="latest-post glass">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </a>
        </div>
<?php }
?> </div>
<?php get_footer();?>