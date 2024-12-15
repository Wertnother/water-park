<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo YoastSEO()->meta->for_current_page()->title ?></title>
    <meta name="description" content="<?php echo YoastSEO()->meta->for_current_page()->description; ?>" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php wp_head(); ?>
</head>

<body>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 text-dark"><i class="fas fa-swimmer text-primary me-3"></i>WaterLand</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header',
                    'menu_class'     => 'navbar-nav mx-auto py-0',
                    'container'      => false,
                    'walker'         => new Custom_Walker_Nav_Menu(),
                ));
                ?>
                
                <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                    <a class="btn btn-square btn-light rounded-circle mx-1" href="<?php the_field('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href="<?php the_field('twitter_link'); ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href="<?php the_field('instagram_link'); ?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href="<?php the_field('linkedin_link'); ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Get Started</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->