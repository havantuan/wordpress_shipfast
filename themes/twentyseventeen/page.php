<?php
///**
// * The template for displaying all pages
// *
// * This is the template that displays all pages by default.
// * Please note that this is the WordPress construct of pages
// * and that other 'pages' on your WordPress site may use a
// * different template.
// *
// * @link https://codex.wordpress.org/Template_Hierarchy
// *
// * @package WordPress
// * @subpackage Twenty_Seventeen
// * @since 1.0
// * @version 1.0
// */
//
//get_header(); ?>
<!---->
<!--    <!--<div class="wrap">-->-->
<!--    <!--	<div id="primary" class="content-area">-->-->
<!--    <!--		<main id="main" class="site-main" role="main">-->-->
<!--    <!---->-->
<!--    <!--			-->--><?php
////			while ( have_posts() ) : the_post();
////
////				get_template_part( 'template-parts/page/content', 'page' );
////
////				// If comments are open or we have at least one comment, load up the comment template.
////				if ( comments_open() || get_comments_number() ) :
////					comments_template();
////				endif;
////
////			endwhile; // End of the loop.
////			?>
<!--    <!---->-->
<!--    <!--		</main><!-- #main -->-->-->
<!--    <!--	</div><!-- #primary -->-->-->
<!--    <!--</div><!-- .wrap -->-->-->
<!--    <section id="content">-->
<!--        <section class="content-row content-row-border-top">-->
<!--            <div class="container">-->
<!--                --><?php
//                $args = array(
//                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
//                    'cat' => 1,
//                );
//                ?>
<!--                --><?php //$getposts = new WP_query($args); ?>
<!--                --><?php //global $wp_query;
//                $wp_query->in_the_loop = true; ?>
<!--                --><?php //while ($getposts->have_posts()) : $getposts->the_post(); ?>
<!--                    <article class="blog-article blog-article-center">-->
<!--                        <header class="blog-article-header">-->
<!--                            <h2>-->
<!--                                <a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
<!--                            </h2>-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <i class="fa fa-calendar-o icon-left"></i>--><?php //echo get_the_date('d - m -Y'); // lấy ngày post bài ?>
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </header>-->
<!--                        <div class="blog-article-content">-->
<!--                            <div class="gallery gallery-slider" style="height: 471.813px;">-->
<!--                                --><?php //the_post_thumbnail(); ?>
<!--                            </div>-->
<!--                            <p>-->
<!--                                --><?php //echo limit_keyword(50) // lấy toàn bộ nội dung bài post ?>
<!--                            </p>-->
<!--                            <p>-->
<!--                                <a class="button" href="--><?php //the_permalink(); ?><!--">Xem thêm<i-->
<!--                                            class="fa fa-chevron-right icon-right"></i></a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </article>-->
<!--                --><?php //endwhile;
//                wp_reset_postdata(); ?>
<!--            </div>-->
<!--        </section>-->
<!--        <section class="content-row content-row-gray">-->
<!--            <div class="container">-->
<!--                --><?php //wp_pagenavi(); ?>
<!--            </div>-->
<!--        </section>-->
<!--    </section>-->
<?php //get_footer();
