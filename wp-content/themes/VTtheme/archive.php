<?php get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="home-logo-container">
                <img src="/wp-content/uploads/2022/03/VaultTecLogob.png">
                <h1><?php get_the_archive_title(); ?>Search results</h1>
            </div>
            <?php if (have_posts()) : ?>
                <?php /* Start the Loop */ ?>
                <?php foreach (get_posts() as $post) { ?>
                    <?php if ($post->post_type === 'post') : ?>
                        <div class="post-container">
                            <img class="post-logo"
                                 src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                            <a class="post-title h1"
                               href="<?php echo $post->post_name ?>"><?php echo $post->post_title; ?></a>
                            <div class="post-content">
                                <?php echo $post->post_excerpt; ?>
                                <span class="author-title">This post is brought to you by:</span>
                                <span class="author"><?php $author = get_the_author_meta('display_name', $post->post_author);
                                    echo $author; ?></span>
                                <img class="post-logo"
                                     src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                            </div>
                            <div class="button-container">
                                <a href="<?php echo $post->post_name ?>">
                                    <button class="button-vt" type="button">View Post</button>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php } ?>
            <?php else : ?>
                <div class="post-container">
                    <img class="post-logo"
                         src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                    <div class="search-error-container">
                        <div class="search-error-msg">
                            <h1>Sorry!</h1>
                            <p>You have searched the Vault Tec Corporation Unofficial Website for <strong><?php the_search_query(); ?></strong>. If you are unable to find anything in these search results, you can try one of these links.</p>
                            <img src="wp-content/uploads/2022/03/fallout-vault-boy-sad-lans-soapbox-445869b.png">
                        </div>
                    </div>
                    <img class="post-logo"
                         src="/wp-content/uploads/2022/03/VaultTecLogoe.png">
                </div>
            <?php endif; ?>
        </div><!-- #content .site-content -->
        <?php get_sidebar(); ?>
    </div><!-- #primary .content-area -->
<?php get_footer(); ?>