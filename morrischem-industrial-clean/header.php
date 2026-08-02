
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <h1><?php bloginfo('name'); ?></h1>
            </a>
            <p class="tagline"><?php bloginfo('description'); ?></p>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>
    </div>
</header>
