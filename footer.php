<?php
/**
 * The template for displaying the footer
 *
 * @package Shepmates
 */
?>

<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">Next Generation</a>
        </div>
        
        <div class="footer-links">
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#">About</a>
            <a href="#">Privacy Policy</a>
        </div>
        
        <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    
    <div class="footer-copyright">
        &copy; <?php echo date('Y'); ?> Seven Mates. All Rights Reserved.
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>