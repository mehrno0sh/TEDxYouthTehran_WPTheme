<?php get_header(); ?>

<!--Add Page Structure-->

<?php
while (have_posts()) : the_post();

    the_content();

endwhile;
?>

<?php get_footer(); ?>
