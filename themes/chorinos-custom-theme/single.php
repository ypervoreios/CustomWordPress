<?php get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="container-sm mb-5 mt-5">
            <h2><?php the_title();?></h2>
                <div class="entry-content">
                    <?php the_content();?>
                </div>
    </div>
<?php }

get_footer();?>