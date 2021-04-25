<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body>
<header>
    <div class="site-size">
        <nav class="site-size__header-grid">

	            <?php
	            $logo = get_field('logo', 15);
	            ?>


            <a href="/" class="header-grid__logo-link"><img src="<?php echo $logo['url']; ?>" class="header-grid__logo" alt="<?php echo $logo['alt']; ?>"></a>
            <div class="header-grid__phones">
                <a href="tel:+380506780690" class="phones__phone">
                    <span class="phone__icon"></span>
                    <span class="phone__number"><?php the_field('number-1', 15);?></span>
                </a>
                <a href="tel:+380681817588" class="phones__phone">
                    <span class="phone__icon"></span>
                    <span class="phone__number"><?php the_field('number-2', 15);?></span>
                </a>
            </div>
            <div class="header-grid__text">
                <?php the_field('header_text', 15);?>
            </div>
            <div class="header-grid__container-mob">
                <button class="container-mob__btn-menu-mob">
                    <div class="btn-menu-mob__block-center">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
            <?php
            $args = array(
                'theme_location'  => 'header_menu',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'header-grid__row-menu',
                'menu_id'         => 'menuH',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '<span class="item__text-menu">',
                'link_after'      => '</span>',
                'items_wrap'      => '<div id="menuH" class="header-grid__row-menu">%3$s</div>',
                'depth'           => 0,
                'walker'          => '',
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
    </div>
</header>
