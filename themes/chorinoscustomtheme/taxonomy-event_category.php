<?php get_header(); ?>

<div class="container-sm text-center">
<main>
    
<div class="container-sm mt-5 mb-5">
    <h1><?php single_term_title(); ?></h1>
    <p><?php echo term_description(); ?></p>
</div> 
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            
               <div class="container-sm list-group text-center">
                    
                        <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action"><?php the_title(); ?></a>
                </div>
            <?php endwhile; ?>
    <?php else : ?>
        <p>No books found in this category.</p>
    <?php endif; ?>
 
</main>
</div>
<?php get_footer(); ?>
