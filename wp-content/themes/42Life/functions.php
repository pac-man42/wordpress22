<?php


//тут подключаем скрипты и стили
function load_style_script() {
	wp_enqueue_script('jquery-2.2.0.min', get_template_directory_uri() . '/js/jquery-2.2.0.min.js'); 
	wp_enqueue_script('jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js'); 
	wp_enqueue_script('javascript', get_template_directory_uri() . '/js/javascript.js'); 
	wp_enqueue_style('style' , get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style_homepage' , get_template_directory_uri() . '/css/style_homepage.css');
	wp_enqueue_style('fonts' , get_template_directory_uri() . '/css/fonts.css');
}
add_action( 'wp_enqueue_scripts', 'load_style_script');
//поддержка миниатюр
add_theme_support('post-thumbnails');
//поддержка меню
register_nav_menu('menu', 'Менюшка');



//поддержка виджетов футера
register_sidebar (array(
	'name' => 'Виджеты homepage right',
	'id' => 'sidebar_homepage_r',
	'description' => 'виджеты ', 
	'before_widget' => '<div class="widget_chat">', //блок в который завернут виджет
	'after_widget' => '</div>',
	));
register_sidebar (array(
	'name' => 'Виджеты homepage left',
	'id' => 'sidebar_homepage_l',
	'description' => 'виджеты ', 
	'before_widget' => '<div class="widget_news_site">', //блок в который завернут виджет
	'after_widget' => '</div>',
	));





?>