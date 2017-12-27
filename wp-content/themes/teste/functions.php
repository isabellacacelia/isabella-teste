<?php 

add_theme_support('post-thumbnails');

function menu_top() {
	register_nav_menu('header-menu', 'main-menu');
}
add_action('init', 'menu_top');
