<main>
    <section>
        <?php
        if (is_active_sidebar('fshp')):
            dynamic_sidebar('fshp');
        endif;
        ?>
    </section>
    <section>
        <?php
        if (is_active_sidebar('sshp')):
            dynamic_sidebar('sshp');
        endif;
        ?>
    </section>
    <section>
        <?php
        if (is_active_sidebar('cf_1')):
            dynamic_sidebar('cf_1');
        endif;
        ?>
    </section>
    <section>
        <?php
        if (is_active_sidebar('seo_t_1')):
            dynamic_sidebar('seo_t_1');
        endif;
        ?>
    </section>
</main>