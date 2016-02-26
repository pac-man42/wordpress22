<?php get_header(); ?>
		<div class="content">
		<h2 class="page-title">Результаты поиска: </h2>
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
		<p>По запросу ничего не найдено </p>
<?php endif; ?>
		</div>
			<?php get_footer(); ?>