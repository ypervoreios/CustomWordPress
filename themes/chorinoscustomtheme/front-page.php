<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php
                $categories = get_categories();
    
                if (!empty($categories)) {
                echo '<div class="container-sm mt-5 mb-5 list-group text-center">';
                foreach ($categories as $category) {
                echo '<a href="' . get_category_link($category->term_id) . '" class="list-group-item list-group-item-action">' . $category->name . ' (' . $category->count . ')</a>';
                }
                echo '</div>';
                } else {
                echo 'No categories found.';
                }
            ?>
        </div>
        <div class="col-sm-8">
            <div class="row">
                
            </div>
    </div>
</div>        



<?php get_footer(); ?>