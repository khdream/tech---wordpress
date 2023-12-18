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
 * Template Name: FrontPage
 */
if (is_front_page()) {
    get_header();
} else {
    get_header('custom');
}
?>

	<main id="primary" class="site-main">

		adfadfasdf

	</main><!-- #main -->

<?php

get_footer();
