<footer class="site-footer">
    <div class="footer-inner">
        <div class="menu footer-first">
            <div class="menu-row">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => '',
                    'items_wrap' => '%3$s',
                ))
                ?>
            </div>

            <span class="menu-row">
                <span class="menu-item">
                    Contact Us
                </span>
                <a href="call:1-866-671-5353" class="menu-item">
                    <i class="fa fa-volume-control-phone"></i> 1-866-671-5353
                </a>
            </span>
        </div>

        <div class="footer-second">
            <p class="newsletter-heading">Subscribe to our newsletter</p>
            <form class="newsletter-form" action="<?= admin_url('admin-ajax.php'); ?>" method="post">
                <input type="hidden" name="action" value="newsletter" />
                <input name="email" class="newsletter-field" placeholder="Enter your email" />
                <button type="submit" class="newsletter-button">
                    <i class="fa fa-envelope-open"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-copyright">Copyrights &copy; All Rights Reserved</div>

        <div class="footer-socials">
            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
            <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>