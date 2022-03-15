</div><!-- #main .site-main -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-copyright">
            <p>&copy;
                <?php
                echo date_i18n(
                /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
                    _x('Y', 'copyright date format')
                );
                ?>
            </p>
            <p class="footer-sitename">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </p><!-- .footer-copyright -->

            <?php
            if (function_exists('the_privacy_policy_link')) {
                the_privacy_policy_link('<p class="privacy-policy">', '</p>');
            }
            ?>

            <p class="powered-by-wordpress">
                <a href="<?php echo esc_url(__('https://wordpress.org/')); ?>">
                    <?php _e('Powered by WordPress'); ?>
                </a>
            </p><!-- .powered-by-wordpress --></div>
        <?php wp_footer() ?>
    </footer><!-- #colophon .site-footer -->
</div>
</body>
</html>
