<?php

if(!defined('ABSPATH')){
    exit;
}

define('THEME_URI', get_template_directory_uri());
define('THEME_PATH', get_template_directory());
// enqueue custom styles

include THEME_PATH . '/inc/theme-file.php';