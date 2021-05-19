<?php
/*
Template Name: Главная страница
*/
get_header('home');
?>
<main>
    <section>
        <div class="site-size bg-home-page" style="background-image: url(<?php the_field('bg-home-page'); ?>);">
            <div class="bg-home-page__content">
                <?php
                $h1 = get_field('h1');
                if($h1):
                $txt_default = $h1['h1__txt-default'];
                $txt_clr = $h1['h1__text-color'];
                ?>
                <h1 class="content__title-h1">
                    <span class="title-h1__text"><?php echo $txt_default.' ';?><span class="clr"><?php echo $txt_clr; ?></span> </span>
                </h1>
                <?php
                else:
                echo '';
                endif;?>
                <ul class="content__ul">
                    <li class="ul__item"><span class="item__li-icon"></span><?php the_field('t1'); ?></li>
                    <li class="ul__item"><span class="item__li-icon"></span><?php the_field('t2'); ?></li>
                    <li class="ul__item"><span class="item__li-icon"></span><?php the_field('t3'); ?></li>
                    <li class="ul__item"><span class="item__li-icon"></span><?php the_field('t4'); ?></li>
                </ul>
                <a href="<?php the_field('link_to_program');?>" class="content__btn-more">
                    <span class="btn-more__text"><?php the_field('details-btn_text', 15);?></span>
                </a>
            </div>
            <div class="bg-home-page__img-right" style="background: url(<?php the_field('bg-home-page__img-right'); ?>);"></div>
        </div>
    </section>
    <section>
        <div class="site-size">
            <div class="site-size__content">
                <?php the_field('h2'); ?>
                <?php the_field('desc'); ?>
                <div class="content__grid-row-default">
                    <?php
                    $image = get_field('img_right');
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <div class="grid-row-default__row-item">
                        <span class="row-item__text"><?php the_field('text-1');?></span>
                    </div>
                    <div class="grid-row-default__row-item">
                        <span class="row-item__text"><?php the_field('text-2');?></span>
                    </div>
                    <div class="grid-row-default__row-item">
                            <span class="row-item__text"><?php the_field('text-3');?></span>
                    </div>
                    <div class="grid-row-default__row-item">
                            <span class="row-item__text"><?php the_field('text-4');?></span>
                    </div>
                    <div class="grid-row-default__row-item">
                        <span class="row-item__text"><?php the_field('text-5');?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="site-size bg-contacts" style="background-image: url(<?php the_field('bg-contacts'); ?>);">
            <?php the_field('h2_callback-form'); ?>
            <form action="" method="post" class="bg-contacts__form" id="fForm" data-sender="<?php echo(get_template_directory_uri().'/back/mail/sender.php'); ?>">
                <input type="text" name="fio" required="required" placeholder="<?php the_field('name_p', 15);?>">
                <input type="tel" name="tel" required="required" placeholder="<?php the_field('phone_p', 15);?>">
                <textarea name="text" placeholder="<?php the_field('desc_p', 15);?>"></textarea>
                <input type="hidden" value="fForm" name="type">
                <button type="submit" class="btn-submit">
                    <span class="btn-submit__text"><?php the_field('s-btn_text', 15);?></span>
                </button>
                <div class="form__desc">
                    <?php the_field('form__desc'); ?></div>
            </form>
        </div>
    </section>
    <section class="section-seo-text">
        <div class="site-size">
            <div class="site-size__content">
                <?php the_field('home__title-seo');?>

                <div class="content__seo-text">
                    <?php the_field('home__text-seo');?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
