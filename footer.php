<footer>
    <div class="bg-gray-800 text-white p-6 text-center">
        <p>&copy; <?php echo date('Y'); ?> 
        <?php bloginfo('name'); ?>. 
        Tous droits réservés.</p>
        <?php wp_nav_menu([
            'theme_location' => 'footer_menu',
            'container' => false,
            'menu_class' => 'flex space-x-6 text-white',
            'fallback_cb' => false,
        ]); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>