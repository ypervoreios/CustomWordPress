<?php get_header(); ?>

<div class="hero container-sm">


</div>
<div class="container-sm">
    <div class="row">
        <div class="col-sm-4">
            <?php
                $categories = get_categories();
    
                if (!empty($categories)) {
                echo '<div class="container-sm mt-5 mb-5 list-group text-center">';
                foreach ($categories as $category) {
                echo '<a href="' . get_category_link($category->term_id) . '" class="list-group-item list-group-item-action" style="background-color: #192734; color: aliceblue;">' . $category->name . ' (' . $category->count . ')</a>';
                }
                echo '</div>';
                } else {
                echo 'No categories found.';
                }
            ?>
        </div>
        <div class="col-sm-8">
            <div class="ch-container mt-5 mb-5">
                <?php 
                    $homepageEvents = new WP_Query(array(
                        'post_type' => 'event',
                        'posts_per_page' => 4,
                        'order' => 'DESC'
                    ));

                    while ($homepageEvents->have_posts()) {
                        $homepageEvents->the_post(); ?>
                        
                            <div class="my-card glass">
                                    <h5 class="card-title">
                                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                    </h5>
                                    <p class="card-text">
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink();?>" class="btn btn-primary">Read More</a>
                            </div>
                    <?php }  
                ?>
                </div>
                <div style="text-align: center;"><a class="btn btn-primary" href="<?php echo get_post_type_archive_link('event'); ?>">Show all Events</a></div>
        </div>
    </div>
</div>

 <?php get_footer(); ?>