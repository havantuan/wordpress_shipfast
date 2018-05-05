<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <section id="content">
        <!-- Content Row -->
        <section class="content-row content-row-color content-row-clouds content-row-half-height" style="height: auto;">
            <div class="container">
                <div class="column-row align-center">
                    <div class="column-33 text-align-center">
                        <i class="fa fa-exclamation-circle icon-feature-large text-color-light"></i>
                    </div>
                    <div class="column-50">
                        <header class="content-header content-header-large content-header-align-left">
                            <h3>
                                Không tìm thấy trang
                            </h3>
                            <p>
                                Chúng tôi rất tiếc không thể tìm thấy trang của bạn<br><br>
                                <a class="button button-secondary" href="/">Trở về trang chủ<i class="fa fa-chevron-right icon-right"></i></a>
                            </p>
                        </header>
                    </div>
                </div>
            </div>
        </section>
    </section>

<?php get_footer();
