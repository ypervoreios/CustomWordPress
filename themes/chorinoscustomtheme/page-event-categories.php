<?php get_header(); ?>
<?php
/*
Template Name: Event Categories
*/

?>
<div class="container-sm text-center">
    <h1>All Event Categories</h1>
    <h2>This is a custom taxonomy</h2>
</div>
    <hr>
    <div class="ch-container mt-5 mb-5">
        <?php
        $categories = get_terms(array(
            'taxonomy'   => 'event_category',
            'hide_empty' => true,
        ));

        if (!empty($categories)) {
            foreach ($categories as $category) {
                echo '
                  
                <div class="my-card glass">
                    <h5 class="card-title">
                        <a href="' . get_term_link($category) . '">' . $category->name . '</a>
                    </h5>
                </div>';
            }
        } else {
            echo '<p>No categories found.</p>';
        }
        ?>
    </div>

</div>
<?php get_footer(); ?>
