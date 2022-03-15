<?php get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
                            <div class="post-container">
                                <div class="post-content">
                                    <img class="post-logo" src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <img class="post-logo" src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                                </div>
                            </div>
            <?php if (is_front_page()) : ?>
            <div class="home-logo-container">
                <img src="/wp-content/uploads/2022/03/VaultTecLogob.png">
                <h1>Recent News</h1>
            </div>
            <?php foreach(get_posts(array('numberposts' => 3)) as $post){?>
                <div class="post-container">
                    <img class="post-logo" src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                    <a class="post-title h1" href="<?php echo $post->post_name ?>"><?php echo $post->post_title; ?></a>
                    <div class="post-content">
                        <?php echo $post->post_excerpt; ?>
                        <span class="author-title">This post is brought to you by:</span>
                        <span class="author"><?php $author = get_the_author_meta('display_name', $post->post_author); echo $author; ?></span>
                        <div class="button-container">
                            <a href="<?php echo $post->post_name ?>">
                                <button class="button-vt" type="button">View Post</button>
                            </a>
                        </div>
                        <img class="post-logo" src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                    </div>
                </div>
                <?php    }  ?>
<?php endif; ?>
        </div><!-- #content .site-content -->
        <?php get_sidebar('Home right sidebar'); ?>
    </div><!-- #primary .content-area -->
<?php get_footer(); ?>