<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>
</head>
<body>
<?php wp_head(); ?>
<div class="wrapper">
	<header>
	<div class="logo-top"><h1>FOURTY TWO LIFE</h1></div>
		<div class="logo"><a href="<?php home_url(''); ?>"></a></div>
		<div class="slogan"><h1>Новокузнецк как на ладони...</h1></div>
		<div class="search">
			<form class="form-search" method="" action="<?php echo home_url('/'); ?>">
				<input type="text" name="s" placeholder="Найти в Новокузнецке"/></form>
			</div>


		</header>

		<?php wp_nav_menu(array('theme_location' => 'menu', 'container_id' => 'sticker', 'container_class' => 'menu-center')); ?>