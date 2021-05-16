<?php
/*
Template Name: О программе
*/
get_header();
?>
    <main>
        <section>
            <div class="about-row site-size-full">
                <div class="about-row___left-col"
                     style="background-color: <?php the_field('about-row___left-col'); ?>;">
                    <div class="left-col__content">
                        <?php the_field('h1'); ?>
                        <?php the_field('text-left'); ?>
                    </div>
                </div>
                <div class="about-row___right-col">
                    <div class="right-col__bg" style="background-image: <?php the_field('right-col__bg'); ?>;"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="site-size">
                <div class="site-size__content">
                    <?php the_field('h2_greed'); ?>
                    <div class="content__grid-four-col">
                        <?php
                        $grid = get_field('grid');
                        foreach ($grid as $item): ?>
                            <div class="grid-four-col__item">
                                <?php if (empty($item['item_icon'])): ?>
                                    <img src="<?php the_field('img-placeholder', 15) ?>" alt="">
                                <?php
                                else:
                                    ?>
                                    <img src="<?php echo $item['item_icon']; ?>" alt="">
                                <?php endif; ?>
                                <h4 class="item__title-card">
                                    <span class="title-card__text"><?php echo $item['item_title']; ?></span>
                                </h4>
                                <p class="item__desc-title"><?php echo $item['item_desc']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="site-size" style="background-color: <?php the_field('bg-c_spec'); ?>">
                <div class="site-size__content">
                    <?php the_field('h2_spec'); ?>
                    <div class="content__row-default">
                        <div class="row-default__left-col">
                            <?php
                            if (have_rows('specialyty-1')):
                                the_row();
                                $status = get_sub_field('status');
                                if ($status === "default"):
                                    ?>
                                    <div class="left-col__row-speciality default">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                                <?php endif;
                                if ($status === "new"): ?>
                                    <div class="left-col__row-speciality new">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                        <span class="mark">new</span>
                                    </div>
                                <?php endif; endif; ?>
                            <?php
                            if (have_rows('specialyty-2')):
                                the_row();
                                $status = get_sub_field('status');
                                if ($status === "default"):
                                    ?>
                                    <div class="left-col__row-speciality default">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                                <?php endif;
                                if ($status === "new"): ?>
                                    <div class="left-col__row-speciality new">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                        <span class="mark">new</span>
                                    </div>
                                <?php endif; endif; ?>
                            <?php
                            if (have_rows('specialyty-3')):
                                the_row();
                                $status = get_sub_field('status');
                                if ($status === "default"):
                                    ?>
                                    <div class="left-col__row-speciality default">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                                <?php endif;
                                if ($status === "new"): ?>
                                    <div class="left-col__row-speciality new">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                        <span class="mark">new</span>
                                    </div>
                                <?php endif; endif; ?>
                            <?php
                            if (have_rows('specialyty-4')):
                                the_row();
                                $status = get_sub_field('status');
                                if ($status === "default"):
                                    ?>
                                    <div class="left-col__row-speciality default">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                                <?php endif;
                                if ($status === "new"): ?>
                                    <div class="left-col__row-speciality new">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                        <span class="mark">new</span>
                                    </div>
                                <?php endif; endif; ?>
                            <?php
                            if (have_rows('specialyty-5')):
                                the_row();
                                $status = get_sub_field('status');
                                if ($status === "default"):
                                    ?>
                                    <div class="left-col__row-speciality default">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                    </div>
                                <?php endif;
                                if ($status === "new"): ?>
                                    <div class="left-col__row-speciality new">
                                        <span class="row-speciality__corner"></span>
                                        <p><?php the_sub_field('name'); ?></p>
                                        <span class="mark">new</span>
                                    </div>
                                <?php endif; endif; ?>
                        </div>
                        <div class="row-default__right-col bg-speciality" style="background-image: url(<?php the_field('spec_img-r'); ?>"></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="site-size">
                <div class="site-size__content">
                    <?php the_field('h2_q'); ?>
                    <div class="content__grid-area">
                        <?php $lCol = get_field('q_left-col');
                        $rCol = get_field('q_right-col');
                            if(empty($lCol)):
                        ?>
                        <div class="grid-area__left-col">
                            <div class="left-col__title-box">
                                <h3 class="title-box__h3-title">
                                    <span class="h3-title__text">sДневная</span>
                                </h3>
                                <span class="title-box__small-title">форма обучения</span>
                            </div>
                            <div class="left-col__row-price">
                                <div class="row-price__price">14 000 грн.</div>
                                <span class="row-price__text"> / учебный год.</span>
                            </div>
                            <p class="left-col__desc">Для студентов дневной формы обучения оборудованы
                                классы со всем необходимым для обучения</p>
                        </div>
                        <?php else: ?>
                        <div class="grid-area__left-col">
                            <div class="left-col__title-box">
                                <h3 class="title-box__h3-title">
                                    <span class="h3-title__text"><?php echo ($lCol['title']); ?></span>
                                </h3>
                                <span class="title-box__small-title"><?php echo ($lCol['title_s']); ?></span>
                            </div>
                            <div class="right-col__row-price">
                                <?php echo ($lCol['price-row']); ?>
                            </div>
                            <?php echo($lCol['desc']); ?>
                    </div>
                    <?php
                    endif;
                    if(empty($rCol)): ?>
                        <div class="grid-area__right-col">
                            <div class="right-col__title-box">
                                <h3 class="title-box__h3-title">
                                    <span class="h3-title__text">Заочная</span>
                                </h3>
                                <span class="title-box__small-title">форма обучения</span>
                            </div>
                            <div class="right-col__row-price">
                                <div class="row-price__price">12 000 грн.</div>
                                <span class="row-price__text"> / учебный год.</span>
                            </div>
                            <p class="right-col__desc">sДля студентов заочно-дистанционной формы учеба проходит посредством
                                простых в использовании интернет-сервисов</p>
                        </div>
                    <?php else: ?>
                        <div class="grid-area__right-col">
                            <div class="right-col__title-box">
                                <h3 class="title-box__h3-title">
                                    <span class="h3-title__text"><?php echo ($rCol['title']); ?></span>
                                </h3>
                                <span class="title-box__small-title"><?php echo ($rCol['title_s']); ?></span>
                            </div>
                            <div class="right-col__row-price">
                                <?php echo ($rCol['price-row']); ?>
                            </div>
                            <?php echo($rCol['desc']); ?>
                        </div>
                    <?php endif; ?>
                        <div class="grid-area__full-width-col">
                            <p>Стоимость обучения фиксированная для всех специальностей.</p>
                            <p>Также при поступлении вносится обязательный <span class="clr">единоразовый</span> взнос в
                                размере 200 злотых.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="site-size" style="background-color: <?php the_field('bg-c'); ?>">
                <div class="site-size__content">
                    <?php
                    the_field('h2_students-q');
                    $q1 = get_field('q1');
                    $q2 = get_field('q2');
                    $q3 = get_field('q3');
                    $q4 = get_field('q4');
                    $q5 = get_field('q5');
                    ?>
                    <div class="content__row-default">
                        <div class="row-default__left-col">
                            <?php if(empty($q1['number']) and empty($q1['question'])): ?>
                            <div class="left-col__row-questions default">
                                <span class="row-questions__corner">
                                    1
                                </span>
                                <p>Заполнить форму обратной связи на сайте</p>
                            </div>
                            <?php else: ?>
    <div class="left-col__row-questions default">
                                <span class="row-questions__corner">
                                    <?php echo($q1['number']); ?>
                                </span>
        <?php echo($q1['question']); ?>
    </div><?php endif;  if(empty($q2['number']) and empty($q2['question'])):?>
                            <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                2
                            </span>
                                <p>Собрать и подать в приемную комиссию документы</p>
                            </div>
<?php else: ?>
    <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                <?php echo($q2['number']); ?>
                            </span>
        <?php echo($q2['question']); ?>
    </div> <?php endif; if(empty($q3['number']) and empty($q3['question'])): ?>
                            <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                3
                            </span>
                                <p>Пройти устное собеседование</p>
                            </div>
<?php else: ?>
    <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                <?php echo($q3['number']); ?>
                            </span>
        <?php echo($q3['question']); ?>
    </div>
<?php endif; if(empty($q4['number']) and empty($q4['question'])):?>
                            <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                4
                            </span>
                                <p>Заключить договор об обучении</p>
                            </div>
<?php else: ?>
    <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                <?php echo($q4['number']); ?>
                            </span>
        <?php echo($q4['question']); ?>
    </div>
<?php endif; if(empty($q5['number']) and empty($q5['question'])): ?>
                            <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                5
                            </span>
                                <p>Получать образование</p>
                            </div>
<?php else: ?>
    <div class="left-col__row-questions default">
                            <span class="row-questions__corner">
                                <?php echo($q5['number']);?>
                            </span>
        <?php echo($q5['question']);?>
    </div> <?php endif; ?>
                        </div>
                        <div class="row-default__right-col bg-questions" style="background-image: url('<?php the_field('bg-questions'); ?>')"></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="site-size">
                <div class="site-size__content">
                    <div class="content__row-default">
                        <div class="row-default__left-col diplom-content">
                            <?php the_field('s6_text'); ?>
                        </div>
                        <?php
                            $img = get_field('s6_img');
                        ?>
                        <img class="row-default__right-col-img" src="<?php echo($img['url']); ?>" alt="<?php echo $img['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="site-size" style="background-color: <?php the_field('faq__bg-color');?>">
                <div class="site-size__content">
                    <?php the_field('faq__title'); ?>
                    <div class="content__faq">
                        <?php
                        $faq_group = get_field('faq-group');
                        foreach ($faq_group as $item): ?>
                            <div class="faq__row">
                            <div class="row__container-q">
                                <span class="container-q__icon">?</span>
                                <span class="container-q__text-q"><?php echo $item['q']; ?></span>
                                <span class="container-q__icon-anim">
                                <span></span>
                                <span></span>
                            </span>
                            </div>
                            <div class="row__container-a">
                                <?php echo $item['a']; ?>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="oFormAnchor">
            <div class="site-size bg-contacts" style="background-image: url('<?php the_field('bg-contacts_about');?>');">
                <?php the_field('h2_callback-form_about'); ?>
                <form action="" method="post" id="oForm" data-sender="<?php echo(get_template_directory_uri().'/back/mail/sender.php'); ?>">
                    <input type="text" name="fio" required="required" placeholder="Имя">
                    <input type="tel" name="tel" required="required" placeholder="Номер телефона">
                    <textarea name="text" placeholder="Ваш вопрос? (Не обязательно)"></textarea>
                    <input type="hidden" value="oForm" name="type">
                    <button type="submit" class="btn-submit">
                        <span class="btn-submit__text">Отправить</span>
                    </button>
                    <div class="form__desc"><?php the_field('form__desc_about');?></div>
                </form>
            </div>
        </section>
        <section class="section-seo-text">
            <div class="site-size">
                <div class="site-size__content">
                    <?php the_field('about__title-seo');?>
                    <div class="content__seo-text">
                        <?php the_field('about__text-seo'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();