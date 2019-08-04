<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                        <img class="img-fluid logo" src="wp-content/themes/adrowtradeplustheme/assets/adrowtradeplus_logo.png" alt="Adrow Trade Plus Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo get_home_url(); ?>">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>