<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enlighten
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'enlighten'); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <!-- Site Logo -->
        <div class="ak-container">
            <?php
            $enlighten_header_text = get_theme_mod('enlighten_header_text');
            $enlighten_header_social_link_enable = esc_attr(get_theme_mod('enlighten_enable_heade_social_icon'));
            if ($enlighten_header_text || $enlighten_header_social_link_enable) {
                ?>
                <div class="social_htext_wrap">
                    <?php if ($enlighten_header_text) { ?>
                        <div class="header_text">
                            <span class="text_wrap"><?php echo esc_attr($enlighten_header_text); ?></span>
                        </div>
                    <?php } ?>
                    <?php if ($enlighten_header_social_link_enable) { ?>
                        <div class="header_social_link">
                            <?php do_action('enlignten_header_social_link_action'); ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class="logo_info_wrap">
                <?php
                //Header Logo
                do_action('enlighten_action_custom_logo');

                $enlighten_enable_info = esc_attr(get_theme_mod('enlighten_enable_header_info'));
                if ($enlighten_enable_info) { ?>
                    <div class="header_info_wrap">
                        <div class="location_header wow fadeIn">
                            <div class="fa_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="title_location_wrap">
                                <span class="title_location">Gold Coast Centre</span>
                                <span class="location"><a href="tel:07-55200657">07-55200657</a>, <a href="tel:0437054211">0437054211</a></span>
                                <span class="location">goldcoast@vibrantayurveda.com.au</span>
                            </div>
                        </div>
                        <div class="location_header wow fadeIn">
                            <div class="fa_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="title_location_wrap">
                                <span class="title_location">Brisbane Centre</span>
                                <span class="location"><a href="tel:07-38462272">07-38462272</a>, <a href="tel:0452506389">0452506389</a></span>
                                <span class="location">info@vibrantayurveda.com.au</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
        $enlighten_alignment = get_theme_mod('enlighten_menu_alignment', 'center');
        $enlighten_position = get_theme_mod('enlighten_menu_style', 'top');
        if ($enlighten_position == '') {
            $enlighten_position = 'top';
        }
        ?>
        <nav id="site-navigation" class="main-navigation <?php if ($enlighten_alignment || $enlighten_position) {
            echo esc_attr($enlighten_alignment . ' ' . $enlighten_position);
        } ?>" role="navigation">
            <div class="ak-container">
                <div class="mb-ham">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'menu-menu-1-container mmenu-wrapper')); ?>
            </div>
        </nav><!-- #site-navigation -->

        <?php
        if (is_home() || is_front_page()) {
            $enlighten_slider_enable = get_theme_mod('enlighten_enable_slider');
            if ($enlighten_slider_enable) {
                do_action('enlighten_child_header_slider_action');
            }
        } ?>
    </header><!-- #masthead -->

    <!-- Header Banner -->
    <?php do_action('enlighten_header_banner'); ?>

    <div id="content" class="site-content">
