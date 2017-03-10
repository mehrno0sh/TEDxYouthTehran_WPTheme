<?php get_header(); ?>

<section id="pageConatiner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                while (have_posts()) : the_post();

                    the_content();

                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
