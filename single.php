<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SinglePost
 */

if (is_front_page()) {
	get_header();
} else {
	get_header('custom');
}
?>

<?php
if (have_posts()):
	while (have_posts()):
		the_post();
		?>
		<main id="single">
			<section class="post-single-sec relative">
				<div class="main-container">
					<h3>
						<?php the_title(); ?>
					</h3>
					<div class="float-wrapper">
						<?php
						if (has_post_thumbnail()):
							?>
							
							<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
								alt="<?php echo esc_attr(get_the_title()); ?>">

							<?php
						else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-face.png" alt=""
							class="float-left">

							<?php
						endif; ?>
						
						<div class="article-content float-right">
							<!-- テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト -->
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php
	endwhile;
else: ?>
	error
	<?php
endif;
?>
<?php get_footer(); ?>