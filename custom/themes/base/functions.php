<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
//Load custom functions
require_once('includes/functions/enqueue-style.php');
require_once('includes/functions/enqueue-script.php');
// Load MetaBox functions
require_once('includes/functions/metabox/cpt-page.php');
require_once('includes/functions/metabox/cpt-post.php');
?>