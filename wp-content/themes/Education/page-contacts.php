<?php
get_header();
/*Template Name: Страница контактов*/
?>
<main>
    <section>
        <div class="site-size">
            <div class="site-size__content-contact">
                <div class="content-contact__col">
                    <?php the_field('h2_contact-title'); ?>
                    <div class="col__contacts">
                        <?php
                            $adress = get_field('adress');
                            $phone_1 = get_field('phone-1');
                            $phone_2 = get_field('phone-2');
                            $mail = get_field('mail-group');
                            ?>
                        <div class="contacts__row-item mb10">
                            <div class="row-item__box-icon as-fend">
                                <img class="box-icon__img" src="<?echo $adress['img']; ?>" alt="">
                            </div>
                            <div class="row-item__content">
                                <span class="content__text-top"><?php echo $adress['title']; ?></span>
                                <p class="content__text"><?php echo $adress['text']; ?></p>
                            </div>
                        </div>
                        <div class="contacts__row-item mb0">
                            <div class="row-item__box-icon empty-icon"></div>
                            <div class="content__social-row mb0">
                                <a href="<?echo $phone_2['social-link-group']['link']; ?>">
                                    <img class="social-row__icon" src="<?echo $phone_2['social-link-group']['icon']; ?>" alt="">
                                </a>
                                <a href="<?echo $phone_2['social-link-group_2']['link']; ?>">
                                    <img class="social-row__icon" src="<?echo $phone_2['social-link-group_2']['icon']; ?>" alt="">
                                </a>
                                <a href="<?echo $phone_2['social-link-group_3']['link']; ?>">
                                    <img class="social-row__icon" src="<?echo $phone_2['social-link-group_3']['icon']; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="contacts__row-item">
                            <div class="row-item__box-icon">
                                <img class="box-icon__img" src="<?echo $phone_2['img']; ?>" alt="">
                            </div>
                            <div class="row-item__content">
                                <a href="tel:<?echo $phone_2['phone-link']; ?>" class="content__text"><?echo $phone_2['text']; ?></a>
                            </div>
                        </div>
                        <div class="contacts__row-item">
                            <div class="row-item__box-icon">
                                <img class="box-icon__img" src="<?echo $phone_1['img']; ?>" alt="">
                            </div>
                            <div class="row-item__content">
                                <a href="tel:<?echo $phone_1['phone_link']; ?>" class="content__text"><?echo $phone_1['text']; ?></a>
                            </div>
                        </div>
                        <div class="contacts__row-item">
                            <div class="row-item__box-icon">
                                <img class="box-icon__img" src="<?echo $mail['icon']; ?>" alt="">
                            </div>
                            <div class="row-item__content">
                                <a href="mailto:<?echo $mail['mail']; ?>" class="content__text"><?echo $mail['text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-contact__col">
                   <?php the_field('h2_feedback-title');?>
                    <div class="col__callback">
                        <form class="callback__form" action="" id="cForm" method="post" data-sender="<?php echo(get_template_directory_uri().'/back/mail/sender.php'); ?>">
                            <input type="text" name="fio" required="required" placeholder="Имя">
                            <input type="tel" name="tel" required="required" placeholder="Номер телефона">
                        <input type="hidden" value="cForm" name="type">
                            <button type="submit" class="btn-submit">
                                <span class="btn-submit__text">Отправить</span>
                            </button>
                            <div class="form__desc">
                                <?php
                                    the_field('feedback-form__desc');
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
