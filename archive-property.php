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
 * Template Name: PropertyArchive
 */
if (is_front_page()) {
    get_header();
} else {
    get_header('custom');
}
?>
<?php
$locale = isset($_GET["locale"]) ? $_GET["locale"] : 0;
$category = isset($_GET["category"]) ? $_GET["category"] : 0;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'property',
    'paged' => $paged,
    'posts_per_page' => '3',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
);
if ($locale) {
    $args['tax_query'][] = array(
        'taxonomy' => 'property_locale',
        'field' => 'slug',
        'terms' => $locale,
    );
}
if ($category) {
    $args['tax_query'][] = array(
        'taxonomy' => 'property_category',
        'field' => 'slug',
        'terms' => $category
    );
}
$custom_query = new WP_Query($args);
?>

<main id="propList" class="relative">
    <div class="o-container">
        <div class="breadcrumb">
            <a href="<?php echo home_url();?>">TOP　</a> &gt;
            <span>物件一覧</span>
        </div>
        <div class="page-title wow fadeInLeft">
            <h2 class="clr-black-blue">物件一覧</h2>
            <span>右の条件にチェックを入れて絞り込んでください。</span>
        </div>
        <div class="prop-lists">
            <?php
            if ($custom_query->have_posts()):
                while ($custom_query->have_posts()):
                    $custom_query->the_post();
                    ?>

                    <div class="prop-item  wow fadeInUp">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="inline-block w-full">
                            <?php
                            if (has_post_thumbnail()): ?>

                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                    class="full-size obj-fit-cover obj-pos-x-y-center">

                                <?php
                            else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pickup.jpeg"
                                    alt="pickup property image" class="full-size obj-fit-cover obj-pos-x-y-center">
                                <?php
                            endif;
                            ?>
                        </a>
                        <div class="prop-item-content relative">
                            <p class="prop-title fw-700">
                                <?php 
                                if(get_the_title()):
                                echo the_title();
                                else:
                                    echo "タイトルなし";
                                endif;
                                ?>
                            </p>
                            <p>
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'property_category');
                                if (is_array($terms) && count($terms) > 0):
                                    foreach ($terms as $term):
                                        $name = $term->name;
                                        
                                            echo $name;
                                        
                                    endforeach;
                                else:
                                    echo "未分類";
                                endif;
                                ?>
                            </p>
                            <p>
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'property_locale');
                                if (is_array($terms) && count($terms) > 0):
                                    foreach ($terms as $term):
                                        
                                            echo $term->name;
                                        
                                    endforeach;
                                else:
                                    echo "未分類";
                                endif;
                                
                                ?>
                            </p>
                            <p class="range">
                                <!-- 1LDK~2LDK -->
                                <?php
                                $floor_plans = get_field('floor_plan');

                                // Create a comma-separated list from selected values.
                                if( $floor_plans ): 
                                    foreach ($floor_plans as $index => $term_id):
                                        $term = get_term($term_id);
                                        if ($term):
                                            $floor_name = $term->name;
                                            if($index < count($floor_plans) - 1):
                                                echo $floor_name.", ";
                                            else:
                                                echo $floor_name;
                                            endif;
                                        endif;
                                    endforeach;
                                    else:
                                        echo "間 取 り な し";
                                endif;
                                ?>
                            </p>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="absolute clr-lgt-grey hvr-pulse-grow">MORE
                                ▶</a>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>

            </div>
            <div class="pagination">
                <?php if (function_exists('wp_pagenavi')): ?>
                    <?php wp_pagenavi(array('query' => $custom_query)); ?>
                <?php endif; ?>
            </div>
            <?php
            else:
                ?>
            <span class="clr-black-blue">検索結果なし</span>
        <?php endif;
            ?>
    </div>
    <div class="search-form absolute wow fadeInRight">
        <h3 class="clr-black-blue">絞り込み条件検索</h3>
        <form method="get" action="<?php echo home_url(); ?>/property">
            <div class="form-group  wow fadeInRight" data-wow-delay="1s" data-wow-duration="1s">
                <p class="back-clr-black-blue clr-white">エリア</p>
                <?php
                $property_locales = get_terms(
                    array(
                        'taxonomy' => 'property_locale',
                        'hide_empty' => false,
                    )
                );
                if (!is_wp_error($property_locales) && !empty($property_locales)): ?>
                    <ul class="radio-lists">
                        <li class="radio-list-item">
                                <input 
                                    type="radio" 
                                    value="0"
                                    name="locale" 
                                    id="locale_all"
                                    <?php echo (((int) $locale === 0) ? " checked" : ''); ?>
                                    >
                                <label for="locale_all">
                                    すべて
                                </label>
                            </li>
                        <?php
                        foreach ($property_locales as $key => $property_locale):
                            
                            ?>
                            <li class="radio-list-item">
                                <input 
                                    type="radio" 
                                    value="<?php echo $property_locale->slug; ?>"
                                    name="locale" 
                                    id="locale_<?php echo $key;?>"
                                    <?php echo (($locale === $property_locale->slug) ? " checked" : ''); ?>
                                    >
                                <label for="locale_<?php echo $key;?>">
                                    <?php echo $property_locale->name; ?>
                                </label>
                            </li>
                            <?php
                        endforeach;
                        ?>
                    </ul>
                <?php endif; ?>


            </div>

            <div class="form-group wow fadeInRight" data-wow-delay="2s" data-wow-duration="1s">
                <p class="back-clr-black-blue clr-white">搜索</p>
                <?php
                $property_categorys = get_terms(
                    array(
                        'taxonomy' => 'property_category',
                        'hide_empty' => false,
                    )
                );
                if (!is_wp_error($property_categorys) && !empty($property_categorys)): ?>
                    <ul class="radio-lists">
                        <li class="radio-list-item">
                                <input 
                                    type="radio" 
                                    value="0"
                                    name="category" 
                                    id="category_all"
                                    <?php echo (((int) $category === 0) ? " checked" : ''); ?>
                                    >
                                <label for="category_all">
                                    すべて
                                </label>
                            </li>
                        <?php
                        foreach ($property_categorys as $key => $property_category):

                            ?>
                            <li class="radio-list-item">
                                <input 
                                    type="radio" 
                                    value="<?php echo $property_category->slug; ?>" 
                                    name="category"
                                    id="category_<?php echo $key;?>"

                                    <?php echo (($category === $property_category->slug) ? " checked" : ''); ?>
                                    >
                                <label for="category_<?php echo $key;?>">
                                    <?php echo $property_category->name; ?>
                                </label>
                            </li>
                            <?php
                        endforeach;
                        ?>

                    </ul>
                <?php endif; ?>
            </div>


            <button type="submit" class="back-clr-red-grd clr-white wow fadeInDown" data-wow-delay="3s"
                data-wow-duration="1s">
                検 索
                <svg xmlns="http://www.w3.org/2000/svg" width="20.4" height="20.412" viewBox="0 0 20.4 20.412">
                    <g id="Group_332" data-name="Group 332" transform="translate(-1066.259 -818.31)">
                        <path id="Path_1" data-name="Path 1"
                            d="M1079.528,829.948a7.332,7.332,0,1,0-1.631,1.632l.567.566,1.631-1.631Zm-2.173-.542a5.324,5.324,0,1,1,0-7.529A5.324,5.324,0,0,1,1077.355,829.406Z"
                            fill="#fff" />
                        <path id="Path_2" data-name="Path 2"
                            d="M1086.246,835.795l-5.508-4.92-1.913,1.913,4.92,5.508c.5.648,1.4.552,2.211-.257S1086.894,836.3,1086.246,835.795Z"
                            fill="#fff" />
                    </g>
                </svg>

            </button>
        </form>
    </div>
</main>
<?php get_footer(); ?>