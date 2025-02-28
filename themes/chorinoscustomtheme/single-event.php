<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="page-title"><?php the_title();?></h1>
                <?php the_content();?>
            <?php while (have_posts()) : the_post();?>
                <?php get_template_part('template-parts/content','single-event')?>
            <?php endwhile;?>
        </div>
    </div>
</div>