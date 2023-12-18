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
 * @package hudousan
 * Template Name: PageNotFound
 */

 if (is_front_page()) {
    get_header();
} else {
    get_header('custom');
}

?>

<main id="notFound">
	<section id="pgNotFound">
		<div class="inner-container">
			<div class="pgNotFound-wrapper">

				<h3 class="clr-black-blue">404!</h3>
				<p>ページが見つかりません。</p>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>