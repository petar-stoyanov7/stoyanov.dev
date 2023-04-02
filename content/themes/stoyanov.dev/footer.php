<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */
?>
<div class="ps-navigation">
    <ul class="ps-navigation__container">
        <li>
            <a class="ps-navigation__item navigation-top"></a>
        </li>
    </ul>
</div>
<footer class="ps-footer">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 large-8 ps-footer__copyright">
                Copyright 2023 Petar Stoyanov.
            </div>
            <div class="cell small-12 large-4 ps-footer__contacts">
                <a
                        href="mailto:petar@stoyanov.dev"
                        class="ps-footer__contact contact-email"
                >
                </a>
                <a
                        href="https://www.linkedin.com/in/petar-stoyanov-91a8b454/"
                        class="ps-footer__contact contact-linkedin"
                        target="_blank"
                >
                </a>
                <a
                        href="http://pest-art.com"
                        class="ps-footer__contact contact-caricatures"
                        target="_blank"
                >
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
