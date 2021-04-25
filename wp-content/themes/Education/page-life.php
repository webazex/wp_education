<?php
/*
Template Name: Студжизнь
*/
get_header();
?>
<main>
	<div class="site-size">
		<div class="site-size__content students-life">
			<?php the_field('h1_life');?>
			<div class="content__grid-area-page-life">
				<?php the_content();?>
			</div>
		</div>
</main>
<?php
get_footer();
?>
