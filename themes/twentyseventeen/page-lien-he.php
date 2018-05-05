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
        <!-- Content Row -->
        <section class="content-row content-row-color content-row-clouds" style="padding: 80px;">
            <div class="container">
                <header class="content-header content-header-small content-header-uppercase">
                    <h1>
                        Điểm gửi hàng ShipFast
                    </h1>

                </header>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row">
            <div class="container">
                <div class="tab-group tab-group-switch-style">
                    <div class="tab-item" data-title="Primary Locations">
                        <div class="column-row align-center">

                                <div id="map"></div>
<!--                                <iframe class="iframe-keep-aspect-ratio" width="1280" height="600" src="https://www.google.com/maps" style="height: 354px;"></iframe>-->
                        </div>
                        <div class="content-box">
                            <div class="column-row" id="info-hub">
<!--                                <div class="column-25">-->
<!--                                    <h3>-->
<!--                                        Cơ sở 1-->
<!--                                    </h3>-->
<!--                                    <div class="info-hub">-->
<!--                                    <p>-->
<!--                                        Tại Mễ Trì Số 23 ngõ 2 Đại lộ Thăng Long, P. Mễ Trì, Q. Nam Từ Liêm, TP. Hà Nội.-->
<!--                                    </p>-->
<!--                                    </div>-->
<!--                                    <p>Điện thoại: <a href="tel:0246.6646.222" target="_blank" rel="noopener">0246.6646.222</a></p>-->
<!--                                </div>-->

                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <section class="content-row content-row-color">
            <div class="container">
                <header class="content-header">
                    <h3>
                        Tạo đơn hàng ngay trên ShipFast  <a class="button button-secondary margin-left" target="_blank" href="https://kh.shipfast.vn/">
                            <i class="fa fa-hand-pointer-o icon-left"></i>Đăng ký ngay
                        </a>
                    </h3>
                </header>
            </div>
        </section>
        </div>
        <!-- Content Row -->
    </section>

    <!-- Footer -->
<?php get_footer();
