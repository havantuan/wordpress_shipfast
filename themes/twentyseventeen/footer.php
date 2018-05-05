<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<footer id="footer">
    <section class="footer-primary">
        <div class="container">
            <div class="column-row">
                <div class="column-30 align-center-center">
                    <a class="logo" href="/">
                        <img src=<?php echo  get_theme_file_uri("/assets/img/logos/logoshipfast.png") ?> alt="">
                    </a>
                    <p>
                        Cổng giao nhận vận chuyển giao hàng & thu tiền (CoD) toàn quốc thuộc Công ty CỔ PHẦN GIAO NHẬN THÔNG MINH - SMX JSC CO<br>
                        Giấy ĐKDN số 0108046056 cấp ngày 03/11/2017<br>
                    </p>
                </div>
                <div class="column-70">
                    <div class="column-row align-left-top">
                        <div class="column-30">
                            <h5>
                                Dịch vụ
                            </h5>
                            <ul class="list-style-icon">
                                <li>
                                    <a href="/giao-hang-tiet-kiem"><i class="fa fa-chevron-right"></i>Giao hàng tiết kiệm</a>
                                </li>
                                <li>
                                    <a href="/giao-hang-nhanh"><i class="fa fa-chevron-right"></i>Giao hàng nhanh</a>
                                </li>
                                <li>
                                    <a href="/giao-hang-hoa-toc"><i class="fa fa-chevron-right"></i>Giao hàng hỏa tốc</a>
                                </li>
                                <li>
                                    <a href="/giao-hang-phat-toi"><i class="fa fa-chevron-right"></i>Giao hàng phát tối</a>
                                </li>

                            </ul>
                        </div>
                        <div class="column-30">
                            <h5>
                                CHÍNH SÁCH QUY ĐỊNH
                            </h5>
                            <ul class="list-style-icon">
                                <li>
                                    <a href="/bang-gia"><i class="fa fa-chevron-right"></i>Bảng giá</a>
                                </li>
                                <li>
                                    <a href="/dieu-khoan-su-dung"><i class="fa fa-chevron-right"></i>Điều khoản sử dụng</a>
                                </li>
                                <li>
                                    <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/huong-dan-su-dung-shipfast.pdf") ?>><i class="fa fa-chevron-right"></i>Hướng dẫn  sử dụng Shipfast</a>
                                </li>
                                <li>
                                    <a href=<?php echo  get_wordpress_uploads_directory_path("/documnent/huong-dan-su-dung-App-khach-hang.pdf") ?>><i class="fa fa-chevron-right"></i>Hướng dẫn sử dụng App ShipFast Customer</a>
                                </li>
                            </ul>
                        </div>

                        <div class="column-40">
                            <h5>
                                Liên hệ chúng tôi
                            </h5>
                            <div>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker"></i> Tầng 5 Tòa nhà VPI Viện Dầu Khí<br> 167 Trung Kính - Yên Hòa - Cầu Giấy - Hà Nội</a>
                                    </li>
                                    <li>
                                        <a href="tel:1900 969 629"><i class="fa fa-phone"></i> 1900 969 629  </a>  <a href="tel:024.2320.3579"><i class="fa fa-phone"></i> 024.2320.3579</a>
                                    </li>
                                    <li>
                                        <a href="email:cskh@shipfast.vn"><i class="fa fa-envelope-square"></i> cskh@shipfast.vn  </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-clock-o"></i> Thứ 2 - 7: 8:00 - 18:00</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-secondary">
        <div class="container">
            <p>
                Copyright 2017 &copy;  SMX JSC Company. All rights reserved.<br>
            </p>
        </div>
    </section>
</footer>

</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
