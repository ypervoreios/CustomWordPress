<?php get_header(); ?>
    <div class="container-sm mt-5 mb-5">
        <h2><?php the_archive_title(); ?></h2>
    </div>
<?php
while (have_posts()) {
    the_post(); ?>
        <div class="container-sm list-group text-center">
            <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
            </a>
        </div>
<?php }

get_footer();?>