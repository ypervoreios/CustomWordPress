<?php

while (have_posts()) {
    the_post(); ?>
        <div class="container">
            <h2><?php the_title();?></h2>
                <div class="entry-content">
                   <?php the_content();?>
                </div>
        </div>
<?php }