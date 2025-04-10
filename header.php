<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and the site header.
 *
 * @package Shepmates
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php include(get_template_directory() . '/assets/icons/icons.svg'); ?>
    
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                Next Generation
            </a>

            <button class="navbar-toggler" id="navbarToggler" aria-label="Toggle navigation">
                <svg class="icon icon-menu">
                    <use xlink:href="#icon-menu"></use>
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav',
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'         => new Custom_Nav_Walker()
                ));
                ?>
            </div>
        </div>
    </nav>

    <div class="landing">
        <div class="landing-content">
            <h1 class="landing-title">
                NEXT GENERATION
            </h1>
            <p class="landing-subtitle">SOFTWARE DEVELOPMENT COMPANY, FRONT END & BACK END DEVELOPER</p>
        </div>
    </div>