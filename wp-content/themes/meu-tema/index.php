<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_header(); ?>

<section id="hero">
    <!-- Aqui você pode adicionar um slider, imagem de destaque ou vídeo para a página inicial -->
</section>

<section id="featured-posts">
    <div class="container">
        <h2>Posts em Destaque</h2>
        <div class="featured-posts-grid">
            <?php
            // Loop para exibir três posts em destaque com imagem em destaque
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'meta_key'       => '_thumbnail_id',
            );

            $featured_posts = new WP_Query($args);

            if ($featured_posts->have_posts()) {
                while ($featured_posts->have_posts()) {
                    $featured_posts->the_post();
                    ?>
                    <div class="featured-post">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <?php
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section id="latest-posts">
    <div class="container">
        <h2>Últimos Posts</h2>
        <div class="latest-posts-grid">
            <?php
            // Loop para exibir os últimos 6 posts
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'offset'         => 3, // Exclui os 3 posts em destaque
            );

            $latest_posts = new WP_Query($args);

            if ($latest_posts->have_posts()) {
                while ($latest_posts->have_posts()) {
                    $latest_posts->the_post();
                    ?>
                    <div class="latest-post">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <?php
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
