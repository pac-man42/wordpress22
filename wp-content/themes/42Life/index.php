<?php get_header(); ?>
		<div class="content">
		<div class="reklama-left"><h1>рЕКлама</h1></div>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="list_liders">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_post_thumbnail('full'); ?>
					<div class="description">
					<?php the_content(); ?></div>

					<div class="contacts">
						<span>Тел: +7 985 636 84 83</span>
						<span>email: isiluro@gmail.com</span>
						<span>Site: 42life.ru</span>
					</div>
					<hr class="style-line"></hr>
					<p class="tags"><?php the_tags(); ?></p>
						<a class="more" id="more">Развернуть блок</a>
					</div>
			<?php endwhile; ?>
	<?php else: ?>
<?php endif; ?>

		<div class="reklama-right"><h1>рЕКлама</h1></div>
		</div>
			<?php get_footer(); ?>