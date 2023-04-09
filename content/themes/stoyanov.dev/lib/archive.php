<?php

function fit_excerpt() {
    return 35;
}
add_filter('excerpt_length', 'fit_excerpt');