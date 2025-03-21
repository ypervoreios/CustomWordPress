<?php get_header(); ?>

<div class="container-sm text-center">
<main>
    
<div class="container-sm mt-5 mb-5">
    <h1><?php single_term_title(); ?></h1>
    <p><?php echo term_description(); ?></p>
</div> 
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
               <div class="latest-post">
                <?php the_title(); ?>
                </div>
            </a>
            <?php endwhile; ?>
    <?php else : ?>
        <p>No events found in this category.</p>
    <?php endif; ?>
 
</main>
</div>
<?php get_footer(); ?>
