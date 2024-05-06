<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/chanakresources.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="top-nav nav container position-absolute p-2">
        <a class="logo-link nav-link d-none d-lg-block p-0" href="<?php echo site_url(); ?>">
            <img 
                src='<?php echo get_template_directory_uri(); ?>/assets/svg/chanak-resources_Logo_<?php echo (is_blog() || is_404()) ? "Red&Black" : "white" ?>.svg' 
                alt="Chanak Resources Logo" srcset=""
            >
        </a>
        <!-- <a class="contact-link phone nav-link ml-lg-auto mx-lg-0 mx-auto pl-0" href="tel:+918337097993">
            <div class="row mt-2">
                <div class="col-4">
                    <img class="<?php echo !(is_blog() || is_404()) ? 'd-none d-xl-block' : '' ?> ml-auto" src="<?php echo get_template_directory_uri(); ?>/assets/svg/phone-call-red.svg" alt="">
                    <?php echo !(is_blog() || is_404()) ? '<img class="d-xl-none ml-auto" src="'.get_template_directory_uri().'/assets/svg/phone-call-white.svg" alt="">' : '' ?>
                </div>
                <div class="col-8 p-0">
                    <p class="textColor-Black text m-0">
                        <span class="ml-1"></span> Request Call Back <br>
                        <span class="textColor-Primary<?php echo (is_blog() || is_404()) ? ' blog' : '' ?>">+91-8337097993</span>
                    </p>
                </div>
            </div>
        </a> -->
        <a class="contact-link mail nav-link ml-lg-auto mx-lg-0 mx-auto pl-0 pl-lg-4" href="mailto:service@chanakresources.com">
            <div class="row mt-2">
                <div class="col-3">
                    <img class="<?php echo !(is_blog() || is_404()) ? 'd-none d-xl-block' : '' ?> ml-auto" src="<?php echo get_template_directory_uri(); ?>/assets/svg/mail-red.svg" alt="">
                    <?php echo !(is_blog() || is_404()) ? '<img class="d-xl-none ml-auto" src="'.get_template_directory_uri().'/assets/svg/mail-white.svg" alt="">' : '' ?>
                </div>
                <div class="col-9 p-0">
                    <p class="textColor-Black text m-0">
                        Write Us <br>
                        <span class="textColor-Primary<?php echo (is_blog() || is_404()) ? ' blog' : '' ?>">service@chanakresources.com</span>
                    </p>
                </div>
            </div>
        </a>
    </nav>

    <nav class="navbar top container navbar-expand-lg navbar-light bg-white position-absolute py-0 pt-lg-2">
        <a class="navbar-brand d-block d-lg-none w-75 p-0" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/chanak-resources_Logo_Red&Black.svg" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'paimary',
                    'depth'             => 4,
                    'container'         => 'ul',
                    'container_class'   => 'navbar-nav mr-auto',
                    'menu_class'        => 'navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
            
            <ul class="navbar-nav nav-icon flex-row mx-auto mx-lg-0 mt-4 mt-md-2 mt-lg-0 pb-3 pb-lg-2">
                <li class="nav-item mx-auto">
                    <a target="_blank" href="#"><i class="fab fa-facebook-f mx-3"></i></a>
                </li>
                <li class="nav-item mx-auto">
                    <a target="_blank" href="#"><i class="fab fa-twitter mx-3"></i></a>
                </li>
                <li class="nav-item mx-auto">
                    <a target="_blank" href="#"><i class="fab fa-linkedin-in mx-3"></i></a>
                </li>
            </ul>
        </div>
    </nav>