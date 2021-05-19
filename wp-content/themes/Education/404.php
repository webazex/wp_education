<?php
/*
Template Name: 404
*/
get_header();
?>
<main>
    <div class="site-size">
        <div class="site-size__content">
            <div class="content__not-found-page">
                <?php the_field('404-content', 15);?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>