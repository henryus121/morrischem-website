<footer class="site-footer">
    <div class="header-container">
        <?php
        $footer_name = function_exists('__t') ? __t('footer.name', 'common', 'MORRISCHEM LLC') : 'MORRISCHEM LLC';
        $footer_rights = function_exists('__t') ? __t('footer.rights', 'common', 'All rights reserved.') : 'All rights reserved.';
        ?>
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($footer_name, ENT_QUOTES, 'UTF-8'); ?>. <?php echo htmlspecialchars($footer_rights, ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
