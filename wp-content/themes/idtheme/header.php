<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('chartset'); ?>">
    <link rel="shortcut icon" href='<?php bloginfo('template_directory'); ?>/favicon.ico '>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav>
        <!-- <?php
                if (has_nav_menu('top-menu')) {
                    wp_nav_menu(array('theme_location' => 'top-menu'));
                }
                ?> -->
        <aside class="sidebar">
            <div class="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <!-- NAVBAR BRAND -->
                            <nav class="navbar navbar-light bg-light">
                                <a class="navbar-brand" href="<?php echo home_url() ?>">
                                    <img src="https://industrydive.design/assets/post_img/2018-05-09-logo-redesign/new-logo.png" width="200" alt="">
                                </a>
                            </nav>

                            <?php if (has_nav_menu('top-menu')) :

                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'top-menu',
                                        'menu_id' => 'main-menu',
                                        'container' => 'ul',
                                        'items_wrap' => '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">%3$s</ul>',
                                        'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0 p-2'
                                    )
                                );

                            endif ?>
                            <div class="search">
                                <?php
                                // Search Form searchform.php
                                get_search_form(); ?>
                            </div>

                        </div>
                    </nav>

                </div>
                <!-- STICKY SOCIAL MEDIA ICONS -->
            </div>
        </aside>
    </nav>