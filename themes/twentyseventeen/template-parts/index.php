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

    <div class="wrap">
        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php else : ?>
            <!--	<header class="page-header">-->
            <!--		<h2 class="page-title">--><?php //_e( 'Posts', 'twentyseventeen' ); ?><!--</h2>-->
            <!--	</header>-->
        <?php endif; ?>

        <!--	<div id="primary" class="content-area">-->
        <!--		<main id="main" class="site-main" role="main">-->
        <!---->
        <!--			--><?php
        //			if ( have_posts() ) :
        //
        //				/* Start the Loop */
        //				while ( have_posts() ) : the_post();
        //
        //					/*
        //					 * Include the Post-Format-specific template for the content.
        //					 * If you want to override this in a child theme, then include a file
        //					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        //					 */
        //					get_template_part( 'template-parts/post/content', get_post_format() );
        //
        //				endwhile;
        //
        //				the_posts_pagination( array(
        //					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
        //					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
        //					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
        //				) );
        //
        //			else :
        //
        //				get_template_part( 'template-parts/post/content', 'none' );
        //
        //			endif;
        //			?>
        <!---->
        <!--		</main><!-- #main -->
        <!--	</div><!-- #primary -->

<!--        <div class="column-row">-->
<!--            <div class="column-33">-->
<!--                <div>-->
<!--                    <select class="districtIDSender" id="districtIDSender" style="width: 100%;">-->
<!--                    </select>-->
<!--                    <select class="DistrictIDReceiver" id="DistrictIDReceiver" style="width: 100%;">-->
<!--                    </select>-->
<!--                    <div>-->
<!--                        <div>-->
<!--                            <select class="serviceType" id="serviceType" style="width: 100%;"></select>-->
<!--                            <input placeholder="khối lượng"/>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <button id="submitEstimatedPrice">Tính giá</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="column-66">-->
<!--                <section id="content">-->
<!--                    <section class="content-row content-row-color content-row-clouds">-->
<!--                        <div class="content-slider animate-container-slide" data-nav="true" data-rotation="5">-->
<!--                            <a class="slide" data-title="">-->
<!--                                <div class="container">-->
<!---->
<!--                                    <img src=--><?php //echo get_theme_file_uri("/assets/uploads/banner2.png") ?><!-- alt="">-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a class="slide" data-title="" >-->
<!--                                <div class="container">-->
<!---->
<!--                                    <img src=--><?php //echo get_theme_file_uri("/assets/uploads/banner1.png") ?><!-- alt="">-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </section>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
        <section class="content-row content-row-color content-row-clouds" id="sideheader">
            <div class="container">
                <div class="column-row">
                    <div class="column-30 content-box">
                        <h3 style="margin-bottom: 20px;">
                            TÍNH CƯỚC PHÍ TỰ ĐỘNG
                        </h3>
                        <div class="form-full-width">
                            <div class="form-row">
                                <div class="column-row">
                                    <div class="column-50">
                                        <div class="lineGreen">
                                        <label for="districtIDSender">Tỉnh thành nhận</label>
                                        </div>
                                        <select id="districtIDSender" class="districtIDSender" name="districtIDSender" style="width: 100%">
                                        </select>
                                    </div>
                                    <div class="column-50">
                                        <div class="lineGreen">
                                        <label for="DistrictIDReceiver" >Quận huyện nhận</label>
                                        </div>
                                        <select id="DistrictIDReceiver" class="DistrictIDReceiver" name="DistrictIDReceiver" style="width: 100%">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="column-row">
                                    <div class="column-50">
                                        <div class="lineGreen">
                                        <label for="form-name">Dịch vụ</label>
                                        </div>
                                        <select id="serviceType" class="serviceType" name="serviceType" style="width: 100%">
                                        </select>
                                    </div>
                                    <div class="column-50">
                                        <div class="lineGreen">
                                        <label for="Netweight">Khối lượng</label>
                                        </div>
                                        <input type="text" id="Netweight" class="input"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div style="text-align: center;margin-top: 20px;">
                                <button class="button-secondary" id="submitEstimatedPrice"><i class="fa fa-envelope icon-center"></i>Tính giá</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="column-70">
                        <div class="gallery gallery-slider">
                            <ul>
                                <li>
                                    <a><img src=<?php echo get_theme_file_uri("/assets/uploads/banner1.png") ?> alt=""></a>
                                </li>
                                <li>
                                    <a><img src=<?php echo get_theme_file_uri("/assets/uploads/banner2.png") ?> alt=""></a>
                                </li>
                                <li>
                                    <a><img src=<?php echo get_theme_file_uri("/assets/uploads/banner1.png") ?> alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                </div>

            </div>
        </section>
        <section id="content">
                    <!-- Content Row -->
                    <section class="content-row">
                        <div class="container">
                            <div class="column-30">

                                <div class="form-full-width" method="get" action="contact.html">

                                </div>
                            </div>
                            <div class="column-70">

                            </div>
                        </div>
                    </section>
                    <!-- Content Row -->
        </section>

        <!-- The Modal -->

        <!-- Footer -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();
