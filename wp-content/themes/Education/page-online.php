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
            <?php the_field('h1_online'); ?>
            <div class="content__online-col">
               <?php the_field('text__under-form');?>
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
                    <div class="form__desc">
                        <?php the_field('form__desc'); ?>
                    </div>
                </form>
                <?php the_field('text__before-form');?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
