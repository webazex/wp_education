<div class="popups">
    <div class="popups__content"></div>
</div>
<footer>
    <div class="site-size bg-footer">
        <div class="site-size__footer">
            <div class="footer__content">
                <?php
                $args = array(
                    'theme_location'  => 'footer_menu',
                    'menu'            => '',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'content__menu',
                    'menu_id'         => 'menuF',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '<span class="item__text-menu-footer">',
                    'link_after'      => '</span>',
                    'items_wrap'      => '<div id="menuF" class="content__menu">%3$s</div>',
                    'depth'           => 0,
                    'walker'          => '',
                );
                wp_nav_menu($args);
                ?>
                <div class="content__row-footer">
                    <div class="row-footer__phones-block">
                        <a href="tel:+380939302233" class="phones-block__phone">
                            <span class="phone__icon"></span>
                            <span class="phone__number-footer"><?php the_field('number-1', 15);?></span>
                        </a>
                        <a href="tel:+380939302233" class="phones-block__phone">
                            <span class="phone__icon"></span>
                            <span class="phone__number-footer"><?php the_field('number-2', 15);?></span>
                        </a>
                    </div>
                    <div class="row-footer__copyright-block">
                        <span class="copyright-block__text">©Logotip <?php echo(date("Y")); ?>. Все права защищены!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="up" class="scrollUp"><span>↑</span></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

