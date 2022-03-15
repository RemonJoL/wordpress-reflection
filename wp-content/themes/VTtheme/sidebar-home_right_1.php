<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <div class="sidebar-logo-container">
            <img class="sidebar-logo" src="/wp-content/uploads/2022/03/vault-tec-logo-24E04644F6-seeklogo.com.png">
        </div>
        <?php dynamic_sidebar( 'home_right_1' ); ?>
        <div class="sidebar-logo-container">
            <img class="sidebar-logo" src="/wp-content/uploads/2022/03/vault-tec-logo-24E04644F6-seeklogo.com.png">
        </div>
    </div><!-- #primary-sidebar -->
<?php endif; ?>