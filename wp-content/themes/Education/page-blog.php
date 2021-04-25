<?php
/*
Template Name: Блог
*/
get_header();
global $posters;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 9,
    'paged' => (get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1)
);
$posters = new WP_Query($args);
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $posters;
?>
<main>
	<div class="site-size">
		<div class="site-size__content blog-page">
			<h1 class="content__title-h1">
				<span class="title-h1__text">Блог</span>
			</h1>
            <?php if($posters->have_posts()): ?>
			<div class="content__grid-area-blog">
    <?php while($posters->have_posts()):
        $posters->the_post();?>
				<div class="grid-area-blog__item">
                    <a href="<?php the_permalink();?>" class="item__link-img">
                        <img src="<?php the_post_thumbnail_url(); ?>">
                    </a>
					<h3 class="item__title-blog">
						<span class="title-blog__text"><?php the_title(); ?></span>
					</h3>
					<a href="<?php the_permalink();?>" class="item__link-blog">
						<span class="link-blog__text">Читать</span>
					</a>
				</div>
                <?php endwhile;?>


			</div>

			<?php
	            $ar = [
		            'end_size'     => 1,
		            'mid_size'     => 2,
		            'prev_next'    => True,
		            'prev_text'    => __('←'),
		            'next_text'    => __('→'),
	            ];
	            the_posts_pagination($ar);
else: ?>
            <span>Нет записей</span>
<?php endif; ?>
		</div>
	</div>
</main>
<?php
wp_reset_postdata();
$wp_query = NULL;
$wp_query = $temp_query;
get_footer();
?>
