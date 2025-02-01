<?php get_header(); ?>

    <!-- header -->

    <header class="header">
        <div class="header__container">
            <a href="<?php echo home_url(); ?>" class="header__title-link">
                <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.svg" alt="">
            </a>
            <nav class="header__nav nav" id="js-nav">
                <ul class="header__nav-list">
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>" class="header__nav-link">Top</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/works" class="header__nav-link">Works</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#services" class="header__nav-link">Services</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#news" class="header__nav-link">News</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#profile" class="header__nav-link">Profile</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp" class="header__nav-link">日本語</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#contact" class="header__nav-link header__nav-contact-btn">Contact</a></li>
                </ul>
            </nav>
            <button class="header__hamburger hamburger" id="js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main class="main">

        <!-- Breadcrumb -->

        <div class="breadcrumb">
            <div class="breadcrumb__container">
                <ol class="breadcrumb__list">
                    <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>" class="breadcrumb__link">Top</a></li>
                    <li class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                    <li class="breadcrumb__item">404</li>
                </ol>
            </div>
        </div>

        <section class="error">
            <div class="error__container">
                <h1 class="error__title">404 ERROR</h1>
                <p class="error__text">SORRY...This page does not exist.</p>
                <p class="error__text">申し訳ございませんが、<span class="line-break">こちらのページは存在しません。</span></p>
            </div>

            <div class="view-more">
                <div class="view-more__container">
                    <a href="<?php echo home_url(); ?>" class="view-more__link">Back to Top</a>
                </div>
            </div>

        </section>

        <?php get_footer(); ?>