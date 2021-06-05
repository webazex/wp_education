<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M9ZXNL2');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9ZXNL2"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
