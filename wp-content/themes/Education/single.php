<?php
get_header('');
?>
    <main>
        <div class="site-size">
            <div class="site-size__content">
                <h2 class="content__title">
                    <span class="title__text"><?php the_title(); ?></span>
                </h2>
                <div class="content__blog">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();
?>