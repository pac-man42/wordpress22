</div>
<div class="footer_wrapper">
				<footer class="footer">
					<ul class="onas">
						<h4>42 Life</h4>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Рекламодателю</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#"></a></li>
					</ul>
					<?php wp_nav_menu(array('theme_location' => 'menu_footer', 'container_class' => 'category')); ?>
					<div class="category">
					<ul class="menu_footer">
						<h4>Категории</h4>
						<li><a href="#">Культура</a></li>
						<li><a href="#">Здоровье</a></li>
						<li><a href="#">Спорт</a></li>
						<li><a href="#">Учеба</a></li>
						<li><a href="#">Муниципалитет</a></li>
						<li><a href="#">Покупки</a></li>
						<li><a href="#">Еда</a></li>
						<li><a href="#">Отдых</a></li>
						<li><a href="#">Авто</a></li>
						<li><a href="#">Услуги</a></li>
					</ul>
					</div>
					<ul class="footer_soc_seti">
						<h4>Мы в социальных сетях</h4>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/vk.png"></a>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/face.png"></a>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ok.png"></a>
					</ul>
				</footer>
				<h5>&#169 2016. 42 Life - городской интернет портал.</h5>
			</div>
			<?php wp_footer(); ?>
</body>
</html>