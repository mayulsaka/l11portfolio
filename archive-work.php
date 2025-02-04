<?php get_header(); ?>

<!-- Header -->

<header class="header">
    <div class="header__container">
        <a href="<?php echo home_url(); ?>" class="header__title-link">
            <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.svg" alt="">
        </a>
        <nav class="header__nav nav" id="js-nav">
            <ul class="header__nav-list">
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>" class="header__nav-link">Top</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/works" class="header__nav-link header__current">Works</a></li>
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
                <li class="breadcrumb__item">Works</li>
            </ol>
        </div>
    </div>

    <section id="works" class="works">
        <div class="works__container">
            <h1 class="works__title">Works</h1>
            <ul class="works__nav">
                <li class="works__nav-item works__current"><a href="<?php echo home_url(); ?>" class="works__nav-link all">ALL</a></li>
                <li class="works__nav-item"><a href="<?php echo home_url(); ?>" class="works__nav-link lp">Landing page</a></li>
                <li class="works__nav-item"><a href="<?php echo home_url(); ?>" class="works__nav-link website">Website</a></li>
                <li class="works__nav-item"><a href="<?php echo home_url(); ?>" class="works__nav-link other">Other</a></li>
            </ul>
            <div class="works__display">
                <div class="works__box">
                    <!-- URL -->
                    <a href="<?php the_field('url'); ?>">
                        <!-- サムネ画像１ -->
                        <img src="<?php the_field('thumbnail_1'); ?>" >
                        <!-- サムネ画像２ -->
                        <img src="<?php the_field('thumbnail_2'); ?>" >
                        <ul class="works__list">
                            <li class="works__list-item">
                                <!-- 担当領域 -->
                                <?php
                                $role = get_field('role');
                                if ($role): ?>
                                    <ul>
                                        <?php foreach ($role as $role): ?>
                                            <li>
                                                <?php
                                                echo $role['label'];
                                                ?>
                                            </li>
                                        <?php endforeach; ?>
                                        <ul>
                                        <?php endif; ?>
                            </li>
                        </ul>
                        <!-- タイトル -->
                        <p class="works__list-title"><?php the_field('title'); ?></p>
                        <ul class="works__list">
                            <li class="works__list-item limited">
                                <!-- 状態（新着、限定公開） -->
                                <?php
                                $status = get_field('status');
                                if ($status): ?>
                                    <ul>
                                        <?php foreach ($status as $status): ?>
                                            <li>
                                                <?php
                                                echo $status['label'];
                                                ?>
                                            </li>
                                        <?php endforeach; ?>
                                        <ul>
                                        <?php endif; ?>
                            </li>
                        </ul>
                        <ul class="works__see-more">
                            <li class="works__see-more"><a href="<?php the_field('url'); ?>">See detail</a></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>

            </div>

            <!-- <div class="pagination">
                    <span class="prev page-numbers">«</span>
                    <span class="pagination__page-numbers current">1</span>
                    <a class="pagination__page-numbers" href="<?php echo home_url(); ?>/works/work_02.html">2</a>
                    <a class="pagination__page-numbers" href="<?php echo home_url(); ?>/works/work_03.html">3</a>
                    <a class="next page-numbers" href="<?php echo home_url(); ?>/works/work_02.html">»</a>
                </div> -->

        </div>
    </section>

    <!-- To top -->

    <div id="back-to-top" class="back-to-top">
        <div class="back-to-top__container">
            <a href="#" class="back-to-top__link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/to_top_orange.svg" alt="">
            </a>
        </div>
    </div>

</main>

<?php get_footer(); ?>