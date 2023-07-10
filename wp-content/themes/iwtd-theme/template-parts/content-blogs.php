<div class="blogs">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_title();
        }
        wp_reset_postdata();
    }  ?>

</div>