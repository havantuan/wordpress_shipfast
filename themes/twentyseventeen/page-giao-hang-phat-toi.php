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
                        <img src="<?php echo get_theme_file_uri("/assets/uploads/phattoi-287x300.png") ?>"/>
                    </div>
                    <div class="column-66 bannerHight">
                            <h2>
                                CHUYỂN PHÁT TỐI
                            </h2>
                            <p>
                                Đảm bảo cho đơn hàng chuyển phát dễ dàng vào buổi tối.
                            </p>
                        <ul class="list-style-icon">
                            <li>
                                <i class="fa fa-check"></i>Được tổ chức phát từ 19h00 đến 22h00 hàng ngày
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Phù hợp cho các khách hàng nhận hay di chuyển vị trí làm việc, không thể nhận vào giờ hành chính
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Chuyển phát nhanh có thời gian phát từ 19h00 đến 22h00 từ thứ Hai đến thứ Bảy trong tuần
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </section>

        <section class="content-row">
            <div class="container">
                <header class="content-header">
                    <h2>
                        CHUYỂN PHÁT BUỔI TỐI VỚI SHIPFAST.VN
                    </h2>
                    <p>
                        Giao hàng thuận tiện vào buổi tối
                    </p>
                </header>
                <div class="column-row align-center-bottom text-align-center">
                    <div class="column-33">
                        <i class="fa fa-rocket icon-feature size-icon"></i>
                        <h3>
                            ĐƠN GIẢN
                        </h3>
                        <p>
                            Tạo đơn online nhanh chóng ngay trên điện thoại hoặc website, dễ dàng chuyển phát toàn quốc.
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fa fa-cloud icon-feature size-icon"></i>
                        <h3>
                            TIỆN LỢI
                        </h3>
                        <p>
                            Đến lấy hàng tận nơi miễn phí, dễ dàng theo dõi hành trình đơn hàng online đang trên tuyến đường nào.
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fa fa-shield icon-feature size-icon"></i>
                        <h3>

                            ĐẢM BẢO
                        </h3>
                        <p>
                            Hàng hoá được chuyển phát bởi các hãng vận chuyển uy tín hàng đầu, hạn chế chuyển hoàn.
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <section class="content-row">
            <div class="container">
                <header class="content-header">
                    <h2>
                        CHUYỂN PHÁT TỐI THẬT DỄ DÀNG
                    </h2>
                    <p>
                        Chỉ với 3 bước đơn giản!
                    </p>
                </header>
                <div class="column-row align-center-bottom text-align-center">
                    <div class="column-33">
                        <h3>
                            1. TẠO ĐƠN HÀNG
                        </h3>
                        <p>
                            Bạn đăng nhập trên website hoặc App ShipFast (iOS và Android), sau đó vào tạo đơn hàng, kiểm tra chi phí, tổng số tiền thu hộ nếu có.
                        </p>
                    </div>
                    <div class="column-33">
                        <h3>
                            2. GIAO HÀNG
                        </h3>
                        <p>
                            Bưu tá của đối tác vận chuyển với ShipChung sẽ đến lấy hàng tận nơi, hoặc bạn có thể chủ động mang hàng ra bưu cục, điểm nhận hàng gần nhất. Kiểm tra theo dõi hành trình đơn hàng trên website hoặc app ShipFast.
                        </p>
                    </div>
                    <div class="column-33">
                        <h3>
                            3. NHẬN TIỀN
                        </h3>
                        <p>
                            Sau khi giao hàng thành công & thu tiền, ShipFast sẽ chuyển số tiền thu hộ này vào tài khoản mà bạn chỉ định để nhận và rút tiền.
                        </p>
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
        <!-- Content Row -->
    </section>
<?php get_footer();
