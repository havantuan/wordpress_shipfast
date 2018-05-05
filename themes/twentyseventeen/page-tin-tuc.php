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
        <section class="content-row content-row-border-top">
            <div class="container">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                    'cat' => 1,
                    'post_type' => 'post',
                    'paged' => $paged,
                );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>

                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <article class="blog-article blog-article-center">
                        <header class="blog-article-header">
                            <h2>
                                <a class="link-post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o icon-left"></i><?php echo get_the_date('d - m -Y'); // lấy ngày post bài ?>
                                </li>
                            </ul>
                        </header>
                        <div class="blog-article-content">
                            <div class="thumbnail-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p>
                                <?php echo limit_keyword(50) // lấy toàn bộ nội dung bài post ?>
                            </p>
                            <p>
                                <a class="button" href="<?php the_permalink(); ?>">Xem thêm<i
                                            class="fa fa-chevron-right icon-right"></i></a>
                            </p>
                        </div>
                    </article>

                <?php endwhile;

                 ?>
            </div>

        </section>
        <section class="content-row content-row-gray">
            <div class="container">
                <ul class="pagination">

                    <?php
                    echo phantrang( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $getposts->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i class="fa fa-chevron-left"></i> %1$s', __( '', 'text-domain' ) ),
                        'next_text'    => sprintf( '%1$s <i class="fa fa-chevron-right""></i>', __( '', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );

                    ?>
                </ul>
            </div>
        </section>

    </section>
<?php get_footer();
