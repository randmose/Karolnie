<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php bloginfo('description') ?>" />

    <title>
        <?php bloginfo('name') ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>

    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous" />

    <meta name="theme-color" content="#563d7c" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .showcase {
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/images/test.jpg'); ?>) no-repeat center center;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <!-- font awesome inclusion -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--a class="navbar-brand" href="#">Navbar</a-->
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>

    <section class="showcase">
        <div class="container">
            <h1> <?php echo get_theme_mod('showcase_heading', 'WordPress Theme Dev') ?> </h1>
            <p>
                <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores accusantium commodi vero porro, sit ipsum, magnam aspernatur eius

') ?>
            </p>
            <a href="<?php echo get_theme_mod('btn-url', 'http://test.com') ?> " class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn-text', 'Read More') ?></a>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <?php if (is_active_sidebar('box1')) : ?>
                        <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>

                </div>

                <div class="col-md-4">

                    <?php if (is_active_sidebar('box2')) : ?>
                        <?php dynamic_sidebar('box2'); ?>
                    <?php endif; ?>

                </div>

                <div class="col-md-4">

                    <?php if (is_active_sidebar('box3')) : ?>
                        <?php dynamic_sidebar('box3'); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <footer class="blog-footer">
        <p>
            &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?>
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <?php wp_footer(); ?>

    <!--scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?> /js/bootstrap.js"></script>
</body>

</html>