<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package npstyle
 */

?>

<section class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="home-title-paragraph">Контакты</h3>
				<div class="footer-top-content">
					<p class="text-center footer-top-phone-item"><a href="tel:+84951428656">8 (495) 142 86 56</a></p>
					<p class="text-center footer-top-phone-item"><a href="tel:+89777155800">8 (977) 715 58 00</a></p>
					<p class="text-center footer-top-email-item"><a
							href="mailto:shemetov.edik@mail.ru">shemetov.edik@mail.ru</a></p>
				</div>
				<div class="col social-wrapper">
					<div class="social-item">
						<a href="https://www.instagram.com/np__style?igsh=bzFlbG1tOWFkdWF5"><img
								src="<?php echo get_template_directory_uri() . '/img/social-in.jpg' ?>" alt="Инстаграмм"
								class="social-img"></a>
					</div>
					<div class="social-item">
						<a href="https://www.tiktok.com/@np__style?_t=ZM-8wIVr2z9WMg&_r=1"><img
								src="<?php echo get_template_directory_uri() . '/img/social-tik.jpg' ?>" alt="Тик-ток"
								class="social-img"></a>
					</div>
					<div class="social-item">
						<a href="#"><img src="<?php echo get_template_directory_uri() . '/img/social-whats.jpg' ?>" alt="Ватсап"
								class="social-img"></a>
					</div>
					<div class="social-item">
						<a href="#"><img src="<?php echo get_template_directory_uri() . '/img/social-vaiber.jpg' ?>" alt="Вайбер"
								class="social-img"></a>
					</div>
				</div>
			</div>
			<div class="col">
				<h3 class="home-title-paragraph">Меню</h3>
				<div class="footer-top-content footer-top-content-menu">
					<nav id="site-navigation" class="main-navigation-footer">
						
							<button class="menu-toggle" aria-controls="primary-menu"
								aria-expanded="false"><?php esc_html_e('Меню', 'npstyle'); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
								)
							);
							?>
						
					</nav>
				</div>
			</div>
			<div class="col">
				<h3 class="home-title-paragraph">Наш адрес</h3>
				<div class="footer-top-content">
					<p class="text-center footer-address">
						г. Минск
					</p>
					<div class="footer-map">
						<script type="text/javascript" charset="utf-8" async
							src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad39f849b4ac3c472e6460d2ee1d30675d9aee3fc8630138e0a9e0a78b09c6bc0&amp;width=500&amp;height=300&amp;lang=ru_RU&amp;scroll=true">
							</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'npstyle')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'npstyle'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'npstyle'), 'npstyle', '<a href="https://wp-proger.ru/">Alex</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	// Инициализация карусели с интервалом автоматической прокрутки
	document.addEventListener('DOMContentLoaded', function () {
		var myCarousel = new bootstrap.Carousel(document.getElementById('reviewsCarousel'), {
			interval: 50000, // автоматическая прокрутка каждые 5 секунд
			pause: 'hover' // пауза при наведении
		});
	});
</script>

</body>

</html>