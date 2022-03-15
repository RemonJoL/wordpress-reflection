<?php get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="post-container">
                <div class="post-content">
                    <img class="post-logo" src="/wordpress/wp-content/uploads/2022/03/VaultTecLogoe.png">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <span class="author-title">This post is brought to you by:</span>
                    <span class="author"><?php the_author(); ?></span>
                    <img class="post-logo" src="/wordpress/wp-content/uploads/2022/03/VaultTecLogoe.png">
                </div>
            </div>
        </div><!-- #content .site-content -->
        <?php get_sidebar(); ?>
    </div><!-- #primary .content-area -->
<?php get_footer(); ?>