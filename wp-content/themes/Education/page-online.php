<?php
/*
Template Name: Поступление онлайн
*/
get_header();
if (have_rows('specialyty-1', 31)):
the_row();
$s1 = get_sub_field('name');
endif;
if (have_rows('specialyty-2', 31)):
	the_row();
	$s2 = get_sub_field('name');
endif;
if (have_rows('specialyty-3', 31)):
	the_row();
	$s3 = get_sub_field('name');
endif;
if (have_rows('specialyty-4', 31)):
	the_row();
	$s4 = get_sub_field('name');
endif;
if (have_rows('specialyty-5', 31)):
	the_row();
	$s5 = get_sub_field('name');
endif;
?>
<main>
    <div class="site-size">
        <div class="site-size__content online-page">
            <h1 class="content__title-h1">
                <span class="title-h1__text">Поступление <span class="clr">Online</span></span>
            </h1>
            <div class="content__online-col">
                <p>Для того, чтобы упросить процедуру поступления, мы предлагаем Вам заполнить форму с основной информацией:</p>
                <form action="" method="post" id="oForm" data-sender="<?php echo(get_template_directory_uri().'/back/mail/sender.php'); ?>">
                    <input type="text" name="fio" required="required" placeholder="Имя">
                    <input type="tel" name="tel" required="required" placeholder="Номер телефона">
                    <select name="speciality" required="required" placeholder="Специальность">
                        <option default>
                            <span>Выберите специальность</span>
                        </option>
                        <option value="<?php echo $s1;?>">
                            <span><?php echo $s1;?></span>
                        </option>
                        <option value="<?php echo $s2;?>">
                            <span><?php echo $s2;?></span>
                        </option>
                        <option value="<?php echo $s3;?>">
                            <span><?php echo $s3;?></span>
                        </option>
                        <option value="<?php echo $s4;?>">
                            <span><?php echo $s4;?></span>
                        </option>
                        <option value="<?php echo $s5;?>">
                            <span><?php echo $s5;?></span>
                        </option>
                    </select>
                    <input type="email" name="mail" required="required" placeholder="E-mail адрес">
                <input type="hidden" value="oForm" name="type">
                    <button type="submit" class="btn-submit">
                        <span class="btn-submit__text">Отправить</span>
                    </button>
                    <p class="form__desc">Нажимая кнопку «Отправить» Вы подтверждаете согласие
                        на обработку Ваших персональных данных»</p>
                </form>
                <p>
                    В случае появления вопросов, пожалуйста, заполните форму обратной связи или позвоните нам.
                    Наши контакты можно найти тут...
                </p>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
