<?php
/**
 * Pesticide functions, additions and definitions
 *
 * @package Pesticide
 * @since 0.0.1
 */

define('THEME_JSON', json_decode(file_get_contents(__DIR__ . "/theme.json"), true));

/** Scripts */
require_once 'lib/enqueue-scripts.php';

/** Foundation */
require_once  'lib/foundation.php';

/** Navigation */
require_once 'lib/nav.php';

/** Custom Post Types */
require_once 'lib/add-cpt.php';

/** Custom Taxonomies */
require_once 'lib/add-tax.php';

/** Responsive Images */
require_once 'lib/responsive-images.php';

/** Theme Support */
require_once 'lib/theme-support.php';

/** Archive */
require_once 'lib/archive.php';

/** Custom theme Gutenberg blocks */
require_once 'lib/blocks/index.php';