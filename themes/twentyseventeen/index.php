<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <section id="content">
        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php else : ?>
            <!--	<header class="page-header">-->
            <!--		<h2 class="page-title">--><?php //_e( 'Posts', 'twentyseventeen' ); ?><!--</h2>-->
            <!--	</header>-->
        <?php endif; ?>


        <section class="content-row">
            <div class="container">
                <div class="column-row align-center-bottom">
                    <div class="column-33 bannerHight ">
                        <?php get_form_tinh_gia(); ?>
                    </div>
                    <div class="column-66 bannerHight">
                        <!--                        <section id="content">-->
                        <!--                            <section class="content-row content-row-color content-row-clouds">-->
                        <!--                                <div class="content-slider animate-container-slide" data-nav="true" data-rotation="5">-->
                        <!--                                    <a class="slide side-img">-->
                        <!--                                        <div class="container">-->
                        <!--                                            <img src=-->
                        <?php //echo get_theme_file_uri("/assets/uploads/banner1.png") ?><!-- alt="">-->
                        <!--                                        </div>-->
                        <!--                                    </a>-->
                        <!--                                    <a class="slide side-img">-->
                        <!--                                        <div class="container">-->
                        <!--                                            <img src=-->
                        <?php //echo get_theme_file_uri("/assets/uploads/banner2.png") ?><!-- alt="">-->
                        <!--                                        </div>-->
                        <!--                                    </a>-->
                        <!--                                    <a class="slide side-img">-->
                        <!--                                        <div class="container">-->
                        <!--                                            <img src=-->
                        <?php //echo get_theme_file_uri("/assets/uploads/banner1.png") ?><!-- alt="">-->
                        <!--                                        </div>-->
                        <!--                                    </a>-->
                        <!--                                </div>-->
                        <?php echo do_shortcode('[metaslider id="28"]'); ?>
                        <!--                            </section>-->
                        <!--                        </section>-->
                    </div>
                </div>
                <?php
                /**
        Table tính giá............
                 */
                get_table(); ?>


            </div>
        </section>

        <section class="content-row content-row-gray">
            <div class="container">
                <div class="column-row align-center-bottom">
                    <div class="column-33">
<!--                        <div class="product-box product-box-popular">-->
<!--                            <div class="product-popular box-product">-->
<!--                                Tra cứu đơn hàng-->
<!--                            </div>-->
<!--                            <div class="search">-->
<!--                                <input class="input-search" placeholder="Nhập mã đơn hàng và enter"/>-->
<!--                                <i class="fa fa-search icon-left button-search"></i>-->
<!--                            </div>-->
<!--                        </div>-->
                        <table class="table-has-caption border-radius">
                            <caption id="caption">
                                Dịch vụ
                            </caption>
                            <tbody>
                            <tr>
                                <td rowspan="2"><i class="fa fa-gift icon-feature-inline size-icon"></i></td>
                                <td class="text">Tiết kiệm</td>
                            </tr>
                            <tr>
                                <td class="info">Giúp bạn chuyển tiền tiết kiệm nhất</td>
                            </tr>
                            <tr>
                                <td rowspan="2"><i class="fa fa-motorcycle icon-feature-inline size-icon"></i></td>
                                <td class="text">Phát nhanh</td>
                            </tr>
                            <tr>
                                <td class="info">Chuyển hàng tức thời và nhanh chóng</td>
                            </tr>
                            <tr>
                                <td rowspan="2"><i class="fa fa-rocket icon-feature-inline size-icon"></i></td>
                                <td class="text">Hỏa tốc</td>
                            </tr>
                            <tr>
                                <td class="info">Vận chuyển hàng hóa nhanh nhất có thể</td>
                            </tr>
                            <tr>
                                <td rowspan="2"><i class="fa fa-lightbulb-o icon-feature-inline size-icon"></i></td>
                                <td class="text">Phát tối</td>
                            </tr>
                            <tr>
                                <td class="info">Vận chuyển hàng vào buổi tối</td>
                            </tr>
                            <tr>
                                <td rowspan="2"><i class="fa fa-hourglass-half icon-feature-inline size-icon"></i></td>
                                <td class="text">Dịch vụ 36 giờ</td>
                            </tr>
                            <tr>
                                <td class="info">Vận chuyển phát nhanh tuyến Hà Nội - Tp Hồ Chí Minh</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="column-66">
                        <div class="product-box product-box-popular post">
                            <div class="product-popular box-product">
                                Tin tức
                            </div>
                            <div>
                                <div class="column-row align-center-bottom">
                                    <?php
                                    $args = array(
                                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                                        'showposts' => 3, // số lượng bài viết
                                    );
                                    ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <div class="column-33">
                                            <div class="product-box">
                                                <div class="product-header post">
                                                    <a href=<?php the_permalink(); ?>><?php the_post_thumbnail(array(250, 131)); ?></a>
                                                </div>
                                                <h5 class="title-post">
                                                    <a href="<?php the_permalink(); // lấy link của bài viết ?>">
                                                        <?php the_title(); // lấy tiêu đề ?>
                                                    </a>
                                                </h5>
                                                <div class="date-time">
                                                    <i class="fa fa-calendar-o icon-left"></i><?php echo get_the_date('d - m -Y'); // lấy ngày post bài ?>
                                                </div>
                                                <div class="product-features padding-news post">
                                                    <p class="limit-keyword"><?php echo limit_keyword(40) // Lấy mô tả ngắn của bài post ?></p>
                                                </div>
                                                <div class="product-order">
                                                    <a class="button button-primary"
                                                       href=<?php the_permalink(); // lấy link của bài viết ?>>
                                                        <i class="fa fa fa-info icon-left"></i>Xem thêm
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-row content-row-color">
            <div class="container">
                <div class="column-row align-center-bottom">
                    <div class="gallery gallery-4-columns">
                        <ul>
                            <li>
                                <a href="<?php echo get_theme_file_uri("/assets/uploads/viettel.png") ?>"><img
                                            src="<?php echo get_theme_file_uri("/assets/uploads/viettel.png") ?>"
                                            alt=""></a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_file_uri("/assets/uploads/lazada.png") ?>"><img
                                            src="<?php echo get_theme_file_uri("/assets/uploads/lazada.png") ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_file_uri("/assets/uploads/adayroi.png") ?>"><img
                                            src="<?php echo get_theme_file_uri("/assets/uploads/adayroi.png") ?>"
                                            alt=""></a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_file_uri("/assets/uploads/viettel.png") ?>"><img
                                            src="<?php echo get_theme_file_uri("/assets/uploads/vietnamairline.png") ?>"
                                            alt=""></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- Content Row -->
        <?php get_sidebar(); ?>
    </section><!-- .wrap -->

<?php get_footer();
