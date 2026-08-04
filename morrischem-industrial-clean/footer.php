<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<footer class="site-footer">
    <div class="header-container">
        <p>&copy; <?php echo date('Y'); ?> Morrischem. <?php echo htmlspecialchars(__t('footer.rights', 'common', 'All rights reserved.')); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
