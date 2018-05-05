<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <section id="content">
        <section class="content-row popular-post">
            <?php while (have_posts()) : the_post(); ?>
                <div class="container">
                    <article class="blog-article blog-article-left">
                        <header class="blog-article-header">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o icon-left"></i><?php echo get_the_date('d - m -Y'); // lấy ngày post bài ?>
                                </li>
                            </ul>
                        </header>
                        <div class="blog-article-content">
                            <?php the_post_thumbnail(); ?>
                            <p>
                                <?php the_content(); // lấy toàn bộ nội dung bài post ?>
                            </p>
                        </div>
                    </article>
                    <?php if (the_tags()) { ?>
                        <div class="column-row content-row-border-bottom">
                            <div class="column-80">
                                <h4>
                                    Tags
                                </h4>
                                <ul class="tags">
                                    <li>
                                        <a href=""><?php the_tags(); ?></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            <?php endwhile; // End of the loop.?>

        </section>

        <section class="content-row content-row-border-bottom">
            <div class="container">
                <h3 class="bai-viet">
                    Bài viết liên quan
                </h3>
                <?php
                $categories = get_the_category($post->ID);
                if ($categories)
                {
                $category_ids = array();
                foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                $args = array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'showposts' => 3, // Số bài viết bạn muốn hiển thị.
                    'ignore_sticky_posts' => 1
                );
                $my_query = new wp_query($args);
                if ($my_query->have_posts())
                { ?>
                <section class="content-row content-row-gray">
                    <div class="container">
                        <?php while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <div class="column-row align-left">

                                <div class="column-20">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(250, 150)); ?></a>
                                </div>
                                <div class="column-50">
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p>
                                        <?php echo limit_keyword(30) // Lấy mô tả ngắn của bài post ?>
                                    </p>

                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>

            </div>
            <?php
            }
            }
            ?>
        </section>

    </section>

<?php get_footer();
