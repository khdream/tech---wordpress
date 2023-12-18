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
 * Template Name: PostArray
 */
if (is_front_page()) {
    get_header();
} else {
    get_header('custom');
}
?>
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => '5',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_state' => 'publish',
    'hide_empty' => false,
);
$custom_query = new WP_Query($args);
?>
<main id="list">
    <section class="list relative">
        <div class="main-container">
            <h3>記事一覧</h3>
            <span class="heading-symbol-letter ff-mont italic fw-900 absolute wow fadeInRight" data-wow-delay="2.4s"
                data-wow-duration="0.4s">ARTICLES</span>
            <div class="article-lists">
                <?php
                if ($custom_query->have_posts()):
                    while ($custom_query->have_posts()):
                        $custom_query->the_post();
                        ?>
                        <a class="article-item text-center relative" href="<?php the_permalink(); ?>">
                            <time class="absolute">
                                <?php
                                $post_date = get_the_date('Y/m/d');
                                echo $post_date;
                                ?>

                            </time>
                            <?php
                            if (get_the_title()) {
                                the_title();
                            } else {
                                echo "No Title";
                            }
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="arrow-right"
                                class="absolute">
                        </a>
                        <?php
                    endwhile;
                    ?>

                </div>

                <?php
                else:
                    ?>
                <span class="clr-black-blue">検索結果なし</span>
            <?php endif;
                ?>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/parrel-bg-news.png" alt="parrel-bg-news"
            class="w-full absolute">
    </section>

</main>
<?php get_footer(); ?>