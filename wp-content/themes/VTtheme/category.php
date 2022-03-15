<?php get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="home-logo-container">
                <img src="/wp-content/uploads/2022/03/VaultTecLogob.png">
                <h1><?php single_cat_title(); ?></h1>
            </div>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-container">
                    <img class="post-logo" src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                    <a class="post-title h1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                        <span class="author-title">This post is brought to you by:</span>
                        <span class="author"><?php the_author(); ?></span>
                        <img class="post-logo" src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                    </div>
                    <div class="button-container">
                        <a href="<?php the_permalink(); ?>">
                            <button class="button-vt" type="button">View Post</button>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        </div><!-- #content .site-content -->
        <?php get_sidebar('Home right sidebar'); ?>
    </div><!-- #primary .content-area -->
<?php get_footer(); ?>
<?php get_search_form(); ?>