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
                        <img src="<?php echo get_theme_file_uri("/assets/uploads/hoatoc-203x300.png") ?>"/>
                    </div>
                    <div class="column-66 bannerHight">
                            <h2>
                                DỊCH VỤ GIAO HÀNG HỎA TỐC TRONG 3 GIỜ
                            </h2>

                        <ul class="list-style-icon">
                            <li>
                                <i class="fa fa-check"></i>Áp dụng cho các đơn hàng giao nội thành Hà Nội.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Bưu tá lấy hàng tận nơi chỉ trong 30 phút sau khi tạo đơn.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Giao hàng đến tay người nhận chỉ trong 3 giờ đồng hồ
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Tăng tỉ lệ giao hàng thành công, loại bỏ các lý do khách từ chối nhận hàng vì đổi ý
                            </li>
                            <li>
                                <i class="fa fa-check"></i>Bưu phẩm được ưu tiên nhận, kết nối và phát. Thời gian giao nhận ngắn
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
                        BẠN MUỐN HÀNG ĐƯỢC GIAO ĐẾN TAY KHÁCH CHỈ TRONG 3 GIỜ!?
                    </h2>
                    <p>
                        Tăng cơ hội bán hàng – Khách hàng hài lòng hơn
                    </p>
                </header>
                <div class="column-row align-center-bottom text-align-center">
                    <div class="column-33">
                        <i class="fa fa-rocket icon-feature size-icon"></i>
                        <h3>
                            GIA TĂNG CƠ HỘI BÁN HÀNG
                        </h3>
                        <p>
                            Khách không còn phải phân vân về thời gian giao hàng khi lựa chọn mua hàng của bạn, hàng sẽ được giao đến tay khách nhanh chóng chỉ trong 3 giờ đồng hồ
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fa fa-cloud icon-feature size-icon"></i>
                        <h3>
                            GIẢM ĐƠN HOÀN
                        </h3>
                        <p>
                            Khách vừa đặt hàng xong thì đã nhận được hàng. Khách sẽ không có thời gian để suy nghĩ hay thay đổi quyết định mua hàng vì so sánh sản phẩm của bạn với các sản phẩm tương tự khác.
                        </p>
                    </div>
                    <div class="column-33">
                        <i class="fa fa-shield icon-feature size-icon"></i>
                        <h3>

                            KHÁCH HÀNG HÀI LÒNG
                        </h3>
                        <p>
                            Khách hàng sẽ rất ấn tượng vì tốc độ giao hàng của bạn. Tăng khả năng hài lòng và dễ dàng tiếp tục mua sản phẩm của bạn hơn.
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <section class="content-row">
            <div class="container">
                <header class="content-header">
                    <h2>
                        GIAO HÀNG HỎA TỐC
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


        <!-- Content Row -->
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
<?php get_footer();
