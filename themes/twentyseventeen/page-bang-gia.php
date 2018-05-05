<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
        <section class="content-row ">
            <div class="container">
                <div class="column-row align-center-bottom content-row-clouds">
                    <div class="column-33 bannerHight ">
                        <?php get_form_tinh_gia(); ?>
                    </div>
                    <div class="column-66 bannerHight">

                            <h2>
                                BẢNG GIÁ VẬN CHUYỂN GIAO HÀNG THU HỘ TOÀN QUỐC
                            </h2>
                            <p>
                                Đảm bảo cho đơn hàng chuyển phát liên tỉnh dễ dàng giao thành công nhất.
                            </p>
                        <ul class="list-style-icon">
                            <li>
                                <i class="fa fa-check"></i>Tra cứu dễ dàng trực tuyến
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Báo giá chính xác
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Xem thời gian giao hàng dự kiến
                            </li>
                            <li>
                                <i class="fa fa-check"></i>So sánh giá gửi hàng của bưu điện, các hãng vận chuyển
                            </li>
                        </ul>
                    </div>

                </div>

                <?php
                /**
                Table tính giá............
                 */
                get_table(); ?>


            </div>
            </div>
        </section>
        <section class="content-row content-row-color">
            <div class="container">
                <header class="content-header">
                    <h3>
                        Tải ngay bảng giá của ShipFast  <a class="button button-secondary margin-left" target="_blank" href=<?php echo  get_wordpress_uploads_directory_path("/documnent/bang-gia-van-chuyen.pdf") ?>>
                            <i class="fa fa-rss icon-left"></i>Bảng giá ShipFast
                        </a>
                    </h3>
                </header>
            </div>
        </section>
        <!-- Content Row -->
    </section>
<?php get_footer();
