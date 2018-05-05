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
        <section class="content-row">
            <div class="container">
                <header class="content-header">
                    <h2>
                        Điều khoản sử dụng của ShipFast
                    </h2>
                    <p>
                       Điều khoản sử dụng, những quy định của ShipFast
                    </p>
                </header>
                <div class="column-row align-center-bottom text-align-center">
                    <div class="column-33">
                        <i class="fa fa-rocket icon-feature size-icon"></i>
                        <h3>
                            Quy định giới hạn bồi thường
                        </h3>
                        <p>
                            <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/quy-dinh-boi-thuong.docx") ?>  target="_blank">Tải về<i class="fa fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                    <div class="column-33">
                        <i class=" fa fa-gear icon-feature size-icon"></i>
                        <h3>
                            Hướng dẫn bóc gói hàng hóa
                        </h3>
                        <p>
                            <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/Huong-dan-goi-boc-hang-hoa.docx") ?>  target="_blank">Tải về<i class="fa fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fa fa-refresh icon-feature size-icon"></i>
                        <h3>
                            Hướng dẫn đóng gói bưu gửi có chứa Pin Lithium
                        </h3>
                        <p>
                            <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/huong-dan-dong-goi-BG-chua-Pin-Lithium.docx") ?>  target="_blank">Tải về<i class="fa fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                </div>
                <div class="column-row align-center-bottom text-align-center">
                    <div class="column-33">
                        <i class="fa fa-support icon-feature size-icon"></i>
                        <h3>
                           Quy định hàng cấm gửi có điều kiện
                        </h3>
                        <p>
                            <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/Quy-dinh-Hang-cam-gui-gui-co-dieu-kien-hang-nguy-hiem.docx") ?>  target="_blank">Tải về<i class="fa fa-angle-right icon-right"></i></a>
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fa fa-cloud icon-feature size-icon"></i>
                        <h3>
                            Quy trình xử lí khiếu nại
                        </h3>
                        <p>
                            <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/quy-trinh-xu-ly-khieu-nai.docx") ?>  target="_blank">Tải về<i class="fa fa-angle-right icon-right"></i></a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

    </section>
<?php get_footer();
