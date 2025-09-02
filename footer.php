    </div><!-- #content -->

    <footer class="site-footer">
        <div class="footer-content">
            <nav class="footer-navigation">
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                </ul>
            </nav>
            
            <div class="footer-info">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                <p>Powered by <a href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a></p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<script>
// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');
    
    if (mobileMenuToggle && mainNavigation) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNavigation.classList.toggle('active');
            const isExpanded = mainNavigation.classList.contains('active');
            mobileMenuToggle.setAttribute('aria-expanded', isExpanded);
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mainNavigation.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
                mainNavigation.classList.remove('active');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
});
</script>

<?php wp_footer(); ?>

</body>
</html>