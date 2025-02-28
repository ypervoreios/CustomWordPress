<?php
/*
Template Name: Event Categories
*/
get_header();
?>
<div class="container text-center">
<main>
    <h1>All Event Categories</h1>
    <hr>
    <div class="row g-2">
        <?php
        $categories = get_terms(array(
            'taxonomy'   => 'event_category',
            'hide_empty' => true,
        ));

        if (!empty($categories)) {
            foreach ($categories as $category) {
                echo '<div class="col-6">
                <div class="p-3">
                  <div class="card"><h5 class="card-title">
                  <a href="' . get_term_link($category) . '">' . $category->name . '</a></h5>
                </div>
                </div>
                </div>';
            }
        } else {
            echo '<p>No categories found.</p>';
        }
        ?>
        </div>
</main>
</div>
<?php get_footer(); ?>
