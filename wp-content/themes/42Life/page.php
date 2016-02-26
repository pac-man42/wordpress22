<?php get_header(); ?>
<h2 class="page-title">Страница:<?php the_title(); ?></h2>
		<div class="content">
		<div class="reklama-left"><h1>рЕКлама</h1></div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="list_liders">
					<h1><?php the_title(); ?></h1>
					
					<div class="description" style="height:100%"><?php the_content(); ?></div>

					<div class="contacts">
						<span>Тел: +7 985 636 84 83</span>
						<span>email: isiluro@gmail.com</span>
						<span>Site: 42life.ru</span>
					</div>
					<hr class="style-line"></hr>
					
					</div>
			<?php endwhile; ?>
	<?php else: ?>
<?php endif; ?>
			<div class="reklama-right"><h1>рЕКлама</h1></div>
		</div>
			<?php get_footer(); ?>