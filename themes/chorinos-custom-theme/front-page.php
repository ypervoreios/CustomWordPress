<?php get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="container-sm">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
    <hr>
    </div>
<?php }

get_footer(); ?>