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
 * Template Name: SingleProperty
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
            <section class="breadcrumb-sec">
                <div class="o-container">
                    <div class="breadcrumb">
                        <a href="<?php echo home_url(); ?>">TOP　</a> &gt;
                        <span>物件一覧</span>
                    </div>
                </div>
            </section>
            <section class="hudousan-gallery">
                <div class="mid-container">
                    <p class="property_category">
                        <span class="back-clr-red clr-white">
                            <?php
                            $terms = get_the_terms($post->ID, 'property_category');
                            if (!empty($terms)) {
                                foreach ($terms as $term) {
                                    echo $term->name;
                                }
                            }
                            ?>
                        </span>
                    </p>
                    <div class="float-wrapper">
                        <div class="float-left w-part-half gallery-main">

                            <h3 class="clr-black-blue">
                                <?php echo the_title(); ?>
                            </h3>
                            <!-- Swiper -->
                            <div class="slider" id="mainGallery">
                                <div class="full-size">

                                    <?php
                                    if (has_post_thumbnail()):
                                        ?>
                                        <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                            alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"> -->
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                                            alt="<?php echo esc_attr(get_the_title()); ?>">

                                        <?php
                                    else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_01.jpeg"
                                            alt="hudousan image">

                                        <?php
                                    endif; ?>

                                </div>
                                <?php
                                // Get the gallery images
                                $gallery_images = get_field('gallery');

                                // Check if there are images
                                if ($gallery_images) {
                                    foreach ($gallery_images as $image) {
                                        // Get the attachment ID
                                        $attachment_id = $image['ID'];

                                        // Get the original image URL
                                        $original_image_url = wp_get_attachment_image_src($attachment_id, 'full');

                                        // Display the original image URL
                                        ?>
                                        <div class="full-size">
                                            <?php
                                            echo '<img src="' . esc_url($original_image_url[0]) . '" alt="' . esc_attr($image['alt']) . '" />';
                                            ?>
                                        </div>
                                        <?php

                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="float-right w-part-half plain-draft">
                            <p class="fw-700 clr-main-black">
                            <dl class="flex">
                                <dt>
                                    更新日：
                                </dt>
                                <dd>
                                    <time>
                                        <!-- 0000年00月00日　　 -->
                                        <?php
                                        $modified_date = get_the_modified_date();
                                        if ($modified_date) {
                                            echo $modified_date;
                                        } ?>
                                    </time>
                                </dd>
                                <dt>
                                    次回更新予定日：
                                </dt>
                                <dd>
                                    <time>

                                        <?php
                                        $next_update = get_field('next_update');
                                        if ($next_update):
                                            echo $next_update;
                                        else:
                                            echo "日付設定なし";
                                        endif;
                                        ?>
                                    </time>
                                </dd>
                            </dl>
                            </p>
                            <div class="plain-draft-wrapper relative">
                                <?php
                                $plain_draft = get_field('top_view');
                                if (!empty($plain_draft)): ?>
                                    <img src="<?php echo esc_url($plain_draft['url']); ?>"
                                        alt="<?php echo esc_attr($plain_draft['alt']); ?>" />
                                    <?php
                                else:
                                    ?>
                                    <div class="full-size flex flex-x-y-center">
                                        平面図なし
                                    </div>
                                    <?php
                                endif;
                                ?>
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plain_draft.png" alt="draft"> -->
                                <a href="javascript:;" class="absolute hvr-push clr-grey flex flex-y-center">
                                    Floor Plain
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/full-screen.png"
                                        alt="full mode">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full gallery-thumbs slider">

                        <div class="full-size">

                            <?php
                            if (has_post_thumbnail()):
                                ?>
                                <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"> -->


                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>">

                                <?php
                            else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_01.jpeg"
                                    alt="hudousan image">

                                <?php
                            endif; ?>

                        </div>
                        <?php
                        // Get the gallery images
                        $gallery_images = get_field('gallery');

                        // Check if there are images
                        if ($gallery_images) {
                            foreach ($gallery_images as $image) {
                                // Get the attachment ID
                                $attachment_id = $image['ID'];

                                // Get the original image URL
                                $original_image_url = wp_get_attachment_image_src($attachment_id, 'full');

                                // Display the original image URL
                                ?>
                                <div class="full-size">
                                    <?php
                                    echo '<img src="' . esc_url($original_image_url[0]) . '" alt="' . esc_attr($image['alt']) . '" />';
                                    ?>
                                </div>
                                <?php

                            }
                        }
                        ?>


                        <!-- Add more slides as needed -->

                    </div>
                    <p class="text-right warning">※写真や図と実際の現状が異なる場合は現状を優先させていただきます。</p>
                </div>
            </section>
            <section class="basic-info">

                <div class="mid-container">

                    <h4 class="clr-black-blue relative">
                        基本情報
                        <span class="clr-black-yellow">Basic information</span>
                    </h4>
                    <div class="info-table">
                        <div class="info-item">
                            <div class="title back-clr-black-blue clr-white">
                                物件価格
                            </div>
                            <div class="content">
                                <span class="larger clr-red">


                                    <?php
                                    $price = get_field('property_price');
                                    if ($price):
                                        if (is_numeric($price)):
                                            echo number_format($price) . '万円';
                                        else:
                                            echo $price;
                                        endif;
                                    endif;
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="title back-clr-black-blue clr-white">
                                所在地
                            </div>
                            <div class="content">
                                <?php
                                $terms = get_the_terms($post->ID, 'property_locale');
                                if (!empty($terms)) {
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                }
                                $address = get_field('property_pos');
                                if ($address):
                                    echo " " . $address;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="title back-clr-black-blue clr-white">
                                交通
                            </div>
                            <div class="content">
                                <?php
                                $traffic = get_field("traffic");
                                if ($traffic):
                                    echo $traffic;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-black-blue clr-white">
                                種別
                            </div>
                            <div class="content">
                                <?php
                                $terms = get_the_terms($post->ID, 'property_category');
                                if (!empty($terms)) {
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-black-blue clr-white">
                                利回り
                            </div>
                            <div class="content">
                                <?php
                                $benefit = get_field('benefit_rate');
                                if ($benefit):
                                    echo $benefit;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="prop-detail-info">
                <div class="mid-container">
                    <h4 class="clr-black-blue relative">
                        詳細情報
                        <span class="clr-black-yellow">Property details</span>
                    </h4>
                    <div class="info-table  ">
                        <div class="info-item">
                            <div class="title back-clr-table-grey clr-black-blue">
                                間 取 り
                            </div>
                            <div class="content">


                                <?php
                                $floor_plans = get_field('floor_plan');

                                // Create a comma-separated list from selected values.
                                if ($floor_plans):
                                    foreach ($floor_plans as $index => $term_id):
                                        $term = get_term($term_id);
                                        if ($term):
                                            $floor_name = $term->name;
                                            if ($index < count($floor_plans) - 1):
                                                echo $floor_name . ", ";
                                            else:
                                                echo $floor_name;
                                            endif;
                                        endif;
                                    endforeach;
                                    ?>

                                <?php endif; ?>

                            </div>
                        </div>
                        <?php
                        $input_type = get_field("input_category");
                        $square = get_field("square");
                        if ($input_type == "single"):
                            ?>
                            <div class="info-item">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    建物面積
                                </div>
                                <div class="content">
                                    <?php

                                    if ($square):
                                        if (is_numeric($square)):
                                            echo number_format($square);
                                        else:
                                            echo $square;
                                        endif;
                                    endif;
                                    ?>

                                </div>

                            </div>
                            <?php
                        endif;
                        ?>
                        <?php
                        if (get_field('input_category') == "apart"):
                            ?>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    専有面積／<br>
                                    バルコニー面積
                                </div>
                                <div class="content">

                                    <?php
                                    $balcony = get_field('exlusive_balcony_area');
                                    if ($balcony):
                                        echo $balcony;
                                    endif;
                                    ?>
                                </div>
                            </div>

                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    ルーフバルコニー面積／<br>
                                    テラス面積／専有庭面積
                                </div>
                                <div class="content">
                                    <?php
                                    $gardens = get_field('gardens');
                                    if ($gardens):
                                        echo $gardens;
                                    else:
                                        echo '－／－／－';
                                    endif;
                                    ?>


                                </div>
                            </div>
                            <?php
                        endif;
                        ?>
                        <?php
                        if (get_field('input_category') == "single"):
                            ?>
                            <div class="info-item">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    建物面積（坪数）
                                </div>
                                <div class="content">

                                    <?php
                                    $spuare = get_field('spuare');
                                    if ($spuare):
                                        echo $spuare;
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <?php
                        endif;
                        ?>
                        <?php
                        if (get_field('input_category') == "apart"):
                            ?>
                            <div class="info-item">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    管理費
                                </div>
                                <div class="content">
                                    <?php
                                    $admin_cost = get_field('admin_cost');
                                    if ($admin_cost):
                                        if (is_numeric($admin_cost)):
                                            echo number_format($admin_cost) . '万円';
                                        else:
                                            echo $admin_cost;
                                        endif;
                                    else:
                                        echo '－／－／';
                                    endif;
                                    ?>

                                </div>
                            </div>
                            <?php
                        endif;
                        ?>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                修繕積立金
                            </div>
                            <div class="content">
                                <?php
                                $repair_reserve_fund_short = get_field('repair_reserve_fund_short');
                                if ($repair_reserve_fund_short):
                                    if (is_numeric($repair_reserve_fund_short)):
                                        echo number_format($repair_reserve_fund_short) . '万円';
                                    else:
                                        echo $repair_reserve_fund_short;
                                    endif;
                                else:
                                    echo '－／－／';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                修繕積立基金
                            </div>
                            <div class="content">
                                <?php
                                $repair_reserve_fund_short = get_field('repair_reserve_fund');
                                if ($repair_reserve_fund_short):
                                    if (is_numeric($repair_reserve_fund_short)):
                                        echo number_format($repair_reserve_fund_short) . '万円';
                                    else:
                                        echo $repair_reserve_fund_short;
                                    endif;
                                else:
                                    echo '－／－／';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                権利金
                            </div>
                            <div class="content">
                                <?php
                                $right_money = get_field('right_money');
                                if ($right_money):
                                    if (is_numeric($right_money)):
                                        echo number_format($right_money) . '万円';
                                    else:
                                        echo $right_money;
                                    endif;
                                else:
                                    echo '－／－／';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                駐車場／月額料金
                            </div>
                            <div class="content">

                                <?php
                                $monthly_fee = get_field('monthly_fee');
                                if ($monthly_fee):
                                    if (is_numeric($monthly_fee)):
                                        echo $monthly_fee . '万円';
                                    else:
                                        echo $monthly_fee;
                                    endif;
                                else:
                                    echo '－／－／';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                土地の敷金／保証金
                            </div>
                            <div class="content">

                                <?php
                                $land_deposit = get_field('land_deposit');
                                if ($land_deposit):
                                    if (is_numeric($land_deposit)):
                                        echo number_format($land_deposit) . '万円';
                                    else:
                                        echo $land_deposit;
                                    endif;
                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                借地料／借地期間
                            </div>
                            <div class="content">


                                <?php
                                $land_fee = get_field('land_fee');
                                if ($land_fee):

                                    echo $land_fee;

                                else:
                                    echo '－／－';
                                endif;
                                ?>

                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                土地権利
                            </div>
                            <div class="content">
                                <?php
                                $land_right = get_field('land_right');
                                if ($land_right):

                                    echo $land_right;

                                else:
                                    echo '－／－';
                                endif;
                                ?>

                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                国土法届出要否
                            </div>
                            <div class="content">
                                <?php echo esc_html(get_field('land_Law_notificationrequirement')); ?>

                            </div>
                        </div>
                        <!-- ... -->

                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                土地面積（坪数）
                            </div>
                            <div class="content">
                                <?php echo esc_html(get_field('land_area')); ?>

                            </div>
                        </div>

                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                接道状況
                            </div>
                            <div class="content">
                                <?php echo esc_html(get_field('access_situation')); ?>

                            </div>
                        </div>
                        <?php
                        if (get_field('input_category' == "single")):
                            ?>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    私道負担面積/<br>
                                    セットバック
                                </div>
                                <div class="content">
                                    <?php echo esc_html(get_field('setbacl')); ?>

                                </div>
                            </div>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    路地状敷地
                                </div>
                                <div class="content">
                                    <?php echo esc_html(get_field('alley_like_site')); ?>

                                </div>
                            </div>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    高圧線下面積
                                </div>
                                <div class="content">
                                    <?php echo esc_html(get_field('area_under_hv_line')); ?>

                                </div>
                            </div>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    傾斜地部分面積
                                </div>
                                <div class="content">
                                    <?php echo esc_html(get_field('sloping _area')); ?>

                                </div>
                            </div>
                            <?php
                        endif;
                        ?>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                用途地域
                            </div>
                            <div class="content">
                                <?php
                                $usable_area = get_field('usable_area');
                                if ($usable_area):

                                    echo $usable_area;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                地勢
                            </div>
                            <div class="content">
                                <?php
                                $terms = get_the_terms($post->ID, 'property_locale');
                                if (!empty($terms)) {
                                    foreach ($terms as $term) {
                                        echo $term->name;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                種別/構造
                            </div>
                            <div class="content">

                                <?php
                                $structure = get_field('structure');
                                if ($structure):

                                    echo $structure;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                向き
                            </div>
                            <div class="content">
                                <?php
                                $direction = get_field('direction');
                                if ($direction):

                                    echo $direction;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="title back-clr-table-grey clr-black-blue">
                                築年月（築年数）
                            </div>
                            <div class="content">


                                <?php
                                $construction_year = get_field('construction_year');
                                if ($construction_year):

                                    echo $construction_year;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item <?php echo ((get_field('input_category') == "single") ? '' : ' half'); ?>">
                            <div class="title back-clr-table-grey clr-black-blue">
                                所在階／総階数
                            </div>
                            <div class="content">
                                <?php
                                $layer_floor = get_field('layer_floor');
                                if ($layer_floor):
                                    $location = $layer_floor['location_floor'];
                                    $building = $layer_floor['building_floor'];
                                    if ($location):
                                        echo $location;
                                    endif;
                                    if ($building):
                                        echo "/" . $building;
                                    endif;
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                        if (get_field("input_category") == "apart"):
                            ?>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    棟総戸数／販売戸数
                                </div>
                                <div class="content">

                                    <?php
                                    $units_sold_num = get_field('units_sold_num');
                                    if ($units_sold_num):

                                        echo $units_sold_num;

                                    else:
                                        echo '－／－';
                                    endif;
                                    ?>

                                </div>
                            </div>

                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    管理組合の有無
                                </div>
                                <div class="content">

                                    <?php
                                    $is_admin_fortfollia = get_field('is_admin_fortfollia');
                                    if ($is_admin_fortfollia):

                                        echo esc_html($is_admin_fortfollia);

                                    else:
                                        echo '－／－';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    管理形態
                                </div>
                                <div class="content">
                                    <?php
                                    $management_form = get_field('management_form');
                                    if ($management_form):

                                        echo $management_form;

                                    else:
                                        echo '－／－';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    管理員の勤務形態
                                </div>
                                <div class="content">

                                    <?php
                                    $working_type = get_field('working_type');
                                    if ($working_type):

                                        echo $working_type;

                                    else:
                                        echo '－／－';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="info-item half">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    管理会社
                                </div>
                                <div class="content">
                                    <?php
                                    $management_company = get_field('management_company');
                                    if ($management_company):

                                        echo $management_company;

                                    else:
                                        echo '－／－';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                取引形態
                            </div>
                            <div class="content">

                                <?php
                                $dealing_type = get_field('dealing_type');
                                if ($dealing_type):

                                    echo $dealing_type;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                現況
                            </div>
                            <div class="content">
                                <?php
                                $situation = get_field('situation');
                                if ($situation):

                                    echo $situation;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="title back-clr-table-grey clr-black-blue">
                                引渡し
                            </div>
                            <div class="content">
                                <?php
                                $delivery_time = get_field('delivery_time');
                                if ($delivery_time):

                                    echo $delivery_time;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                        $reform = get_field('reform');
                        if ($reform): ?>
                            <div class="info-item">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    リフォーム

                                </div>
                                <div class="content">


                                    <?php
                                    echo $reform;
                                    ?>
                                </div>
                            </div>
                        <?php endif;
                        ?>
                        <?php
                        $renovation = get_field('renovation');
                        if ($renovation): ?>
                            <div class="info-item">
                                <div class="title back-clr-table-grey clr-black-blue">
                                    リノベーション
                                </div>
                                <div class="content">


                                    <?php
                                    echo $renovation;
                                    ?>
                                </div>
                            </div>
                        <?php endif;
                        ?>

                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                建築確認番号

                            </div>
                            <div class="content">

                                <?php
                                $building_confirmation_number = get_field('building_confirmation_number');
                                if ($building_confirmation_number):

                                    echo $building_confirmation_number;

                                else:
                                    echo '－／－';
                                endif;
                                ?>

                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                物件番号
                            </div>
                            <div class="content">
                                <?php
                                $propery_number = get_field('propery_number');
                                if ($propery_number):

                                    echo $propery_number;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item half">
                            <div class="title back-clr-table-grey clr-black-blue">
                                取引条件の有効期限
                            </div>
                            <div class="content">
                                <?php
                                $expiration_date_of_trading_conditions = get_field('expiration_date_of_trading_conditions');
                                if ($expiration_date_of_trading_conditions):

                                    echo $expiration_date_of_trading_conditions;

                                else:
                                    echo '－／－';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="title back-clr-table-grey clr-black-blue">
                                設備・諸条件
                            </div>
                            <div class="content">
                                <?php
                                $equipement_conditions = get_field('equipement_conditions');
                                if ($equipement_conditions):
                                    foreach ($equipement_conditions as $key => $value):
                                        if ($key > 0):
                                            echo " ▶" . $value;
                                        else:
                                            echo $value;
                                        endif;
                                    endforeach;
                                endif;
                                ?>
                                <!-- ▶公営水道　▶公共下水　▶都市ガス -->
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="title back-clr-table-grey clr-black-blue flex flex-x-y-center">
                                取扱会社
                            </div>
                            <div class="content">
                                <?php
                                $handling_company = get_field('handling_company');
                                if ($handling_company):
                                    echo $handling_company;
                                endif;

                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="remarks  ">
                        <h5 class="fw-700">備考</h5>

                        <?php
                        if (get_field('remarks')):
                            the_field('remarks');
                        endif;
                        ?>

                    </div>
                    <div class="notice  ">
                        <h5 class="fw-700">特記事項</h5>
                        <?php
                        if (get_field('special_notice')):
                            the_field('special_notice');
                        endif;
                        ?>
                        <!-- <p>テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！テキスト！
                        </p> -->
                    </div>
                </div>
            </section>
            <section class="character">
                <div class="mid-container">
                    <div class="character-wrapper relative">
                        <h4 class="clr-black-blue relative  ">
                            特徴
                            <span class="clr-black-yellow">Recommended points</span>
                        </h4>
                        <div>

                            <?php
                            if (get_field('features')):
                                the_field('features');
                            endif;
                            ?>
                        </div>

                    </div>
                </div>
            </section>
            <section class="access">
                <div class="mid-container">
                    <h4 class="clr-black-blue relative  ">
                        アクセス
                        <span class="clr-black-yellow">access</span>
                    </h4>
                    <div class="access-wrapper">

                        <?php
                        $access = get_field('access');
                        if ($access):
                            ?>
                            <div class="access-map-wrapper overflow-hidden">
                                <?php
                                if ($access['map']):
                                    echo $access['map'];
                                endif;
                                ?>
                            </div>

                            <div class="info-table mini">
                                <?php
                                $repeater_items = $access['facility'];
                                if ($repeater_items):
                                    foreach ($repeater_items as $key => $repeater_item):
                                        ?>
                                        <div class="info-item">
                                            <div class="title back-clr-table-grey clr-black-blue">
                                                <?php
                                                $facility_name = $repeater_item['facility_name'];
                                                if ($facility_name):
                                                    echo $facility_name;
                                                endif;
                                                ?>
                                            </div>
                                            <div class="content">
                                                <span class="from">
                                                    <?php
                                                    $from_where = $repeater_item['from_where'];
                                                    if ($from_where):
                                                        echo $from_where;
                                                    endif;
                                                    ?>
                                                </span>
                                                <span>・・・</span>
                                                <span class="distance">
                                                    <?php
                                                    $distance = $repeater_item['distance'];
                                                    if ($distance):
                                                        echo number_format($distance) . "ｍ";
                                                    endif;
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                endif;
                                ?>

                            </div>
                        <?php endif; ?>

                    </div>
                    <p class="attention  ">※地図上に表示される物件の位置は、付近住所に所在することを表すものであり、実際の物件所在地と異なる場合がございます。</p>
                </div>
            </section>


            <section class="similar back-clr-similar-grey">
                <div class="mid-container">
                    <h4 class="clr-black-blue relative  ">
                        類似物件
                        <span class="clr-black-yellow">Similar properties</span>
                    </h4>

                    <?php
                    // Get current property's ID, category, locale, and price
                    $current_property_id = get_the_ID();
                    $current_property_category = wp_get_post_terms($current_property_id, 'property_category');
                    $current_property_locale = wp_get_post_terms($current_property_id, 'property_locale');
                    $current_property_price = get_field('property_price', $current_property_id);

                    // Query for similar properties
                    $similar_properties_query = new WP_Query(
                        array(
                            'post_type' => 'property',
                            'posts_per_page' => -1, // Retrieve all properties
                            'post__not_in' => array($current_property_id), // Exclude the current property
                            'tax_query' => array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'property_category',
                                    'field' => 'term_id',
                                    'terms' => wp_list_pluck($current_property_category, 'term_id'),
                                ),
                                array(
                                    'taxonomy' => 'property_locale',
                                    'field' => 'term_id',
                                    'terms' => wp_list_pluck($current_property_locale, 'term_id'),
                                ),
                            ),
                        )
                    );

                    // Filter and sort similar properties by price
            

                    while ($similar_properties_query->have_posts()):
                        $similar_properties_query->the_post();
                        $property_id = get_the_ID();
                        $top_view = get_field('top_view', $property_id);

                        $property_price = get_field('property_price', $property_id);
                        $admin_cost = get_field('admin_cost', $property_id);
                        $direction = get_field('direction', $property_id);
                        $guid = get_field('guid', $property_id);
                        $floor_plan = get_field('floor_plan', $property_id);
                        if ($current_property_price && $property_price) {
                            $absolute_difference = abs($current_property_price - $property_price);
                        }
                        if ($absolute_difference <= 500) {
                            $similar_properties[$property_id] = array(
                                'title' => get_the_title($property_id),
                                'price' => $property_price,
                                'top_view' => $top_view,
                                'admin_cost' => $admin_cost,
                                'direction' => $direction,
                                'guid' => $guid,
                                'floor_plan' => $floor_plan,
                                'difference' => $absolute_difference,
                            );
                        }
                    endwhile;

                    // Sort properties by absolute difference
            
                    if (isset($similar_properties)):

                        asort($similar_properties);

                        // Display up to 5 similar properties
                        $counter = 0;
                        ?>
                        <table class="w-full border-collapse">
                            <thead class="back-clr-lgt-blue">
                                <tr>
                                    <th>間取り</th>
                                    <th>所在階数</th>
                                    <th>価格</th>
                                    <th>管理費</th>
                                    <th>向き</th>
                                    <th>間取り/専有面積</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($similar_properties as $property_id => $similar_post) {
                                    if ($counter >= 5) {
                                        break; // Limit to 5 similar properties
                                    }

                                    // Display the similar property information
                                    ?>
                                    <tr>

                                        <td>
                                            <?php
                                            $top_view = $similar_post['top_view'];
                                            if (!empty($top_view)): ?>
                                                <img src="<?php echo esc_url($top_view['url']); ?>"
                                                    alt="<?php echo esc_attr($top_view['alt']); ?>" />
                                                <?php
                                            else:
                                                ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plain_draft.png" alt="">
                                            <?php endif; ?>

                                        </td>
                                        <td>

                                            <?php


                                            // Display or use the post title
                                            echo get_the_title($property_id);
                                            ?>
                                        </td>
                                        <td>
                                            <span class="clr-red">
                                                <?php
                                                $price = $similar_post['price'];
                                                if ($price):
                                                    echo number_format($price) . "万円";
                                                endif;

                                                ?>

                                            </span>
                                        </td>
                                        <td>
                                            <!-- 0,000万円 -->
                                            <?php
                                            $admin_cost = $similar_post['admin_cost'];
                                            if ($admin_cost):
                                                echo number_format($admin_cost) . "万円";

                                            endif;

                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $direction = $similar_post['direction'];
                                            echo $direction;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $possible_rooms = $similar_post['floor_plan'];
                                            if ($possible_rooms):

                                                foreach ($possible_rooms as $key => $term_id):
                                                    $term = get_term($term_id);
                                                    $possible_room = $term->name;
                                                    if ($key < count($possible_rooms) - 1):
                                                        echo $possible_room . "<br>";
                                                    else:
                                                        echo $possible_room;
                                                    endif;

                                                endforeach;
                                            endif;
                                            ?>
                                        </td>
                                        <td>
                                            <div class="link-group">
                                                <?php
                                                $link = $similar_post['guid'];
                                                ?>
                                                <a href="<?php echo $link; ?>"
                                                    class="link clr-black-blue text-center flex flex-y-center">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail.png"
                                                        alt="toDetail">
                                                    物件詳細
                                                </a>
                                                <a href="<?php echo home_url('inquery'); ?>"
                                                    class="link back-clr-black-blue clr-white text-center flex flex-y-center">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inquery.png"
                                                        alt="toDetail">
                                                    お問い合わせ
                                                </a>
                                            </div>
                                        </td>
                                    </tr>


                                    <?php

                                    $counter++;
                                }

                                wp_reset_postdata(); // Reset the post data
                                ?>
                            </tbody>
                        </table>

                        <?php
                    else:
                        echo "同様の物件はありません";
                    endif;
                    ?>


                </div>
            </section>
        </main>
        <div class="plain-modal no-display   ">
            <div class="plain-modal-wrapper relative">
                <a class="absolute close-modal" href="javascript:;">&times;</a>
                <img alt="plain" class="full-size inline-block" />
            </div>
        </div>
        <?php
    endwhile;
else: ?>
    error
    <?php
endif;
?>
<?php get_footer(); ?>