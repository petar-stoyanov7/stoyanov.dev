<?php
/**
 * The template for 404 page
 * @package Pesticide
 * @since Pesticide 1.0.0
 */

get_header();
?>

<main class="pest-main">
    <article>
        <div class="pest-entry">
            <header>
                <h1 class="pest-entry__title">
                    Опа, тука няма никой!
                </h1>
            </header>
            <div class="pest-entry__error">
                <p>
                    Страницата липсва, била е премахната, изядена, или някой те е пратил за зален хайвер!
                </p>
            </div>
            <div class="pest-entry__search">
                <h3>
                    Може да пробваш да потърсиш
                </h3>
                <?php get_template_part('template-parts/search'); ?>
            </div>
            <div class="pest-entry__home">
                <h3>
                    Може да пробваш да се върнеш на главната страница
                </h3>
                <a href="<?php echo get_site_url(); ?>">
                    Начало
                </a>
            </div>
        </div>
    </article>
</main>
