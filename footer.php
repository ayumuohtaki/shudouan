<?php if( ! is_front_page() ): ?>
    <?php endif; ?>
<footer>
    <div id="footer">
        <div class="company">
            <div class="footer-text">
                <p>運営会社</p>
            </div>
            <div class="footer-img">
                <a href="https://mugennnohajimari.co.jp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company_logo.png" class="logo" alt="株式会社無限の始まり" /></a>
            </div>   
        </div>
        <div class="copy">
            <p>©️無限の始まり.</p>
        </div>
    </div>
</footer>
</div><!-- /.container -->
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>