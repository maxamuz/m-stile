<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package npstyle
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post();

		get_template_part('template-parts/content', 'page');

		// Вывод повторяющихся текстовых полей
		if (carbon_get_post_meta(get_the_ID(), 'crb_repeating_texts')) {
			$texts = carbon_get_post_meta(get_the_ID(), 'crb_repeating_texts');
			echo '<div class="repeating-texts-block">';
			foreach ($texts as $text) {
				$text_field = esc_html($text['crb_text_field']);
				echo '<p>' . $text_field . '</p>';
			}
			echo '</div>';
		}

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()):
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
