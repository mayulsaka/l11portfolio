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
            <ul class="breadcrumb__list">
                <ol class="breadcrumb__item"><a href="<?php echo home_url(); ?>" class="breadcrumb__link">Top</a></ol>
                <ol class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></ol>
                <ol class="breadcrumb__item"><a href="<?php echo home_url(); ?>/works" class="breadcrumb__link">Works</a></ol>
                <ol class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></ol>
                <ol class="breadcrumb__item">Work details</ol>
            </ul>
        </div>
    </div>

    <!-- Works works -->

    <section id="work-details" class="work-details">
        <div class="work-details__container">
            <h1 class="work-details__title">Work details</h1>

            <div class="work-details__box">
                <div class="work-details__box-link">
                    <a href="<?php echo home_url(); ?>#" target="_blank">
                        <ul class="work-details__list">
                            <li class="work-details__list-item limited">Limited access</li>
                        </ul>
                        <h2 class="work-details__list-title"><?php the_field('title'); ?></h2>
                        <div class="work-details__image-box">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited_org.jpg" alt="" class="work-details__image"> -->
                            <?php
                            $profileImage = get_field('thumbnail_1');
                            if (!empty($profileImage)): ?>
                                <img src="<?php echo esc_url($profileImage['url']); ?>" alt="<?php echo esc_attr($profileImage['alt']); ?>" />
                            <?php endif; ?>
                            <?php
                            $profileImage = get_field('thumbnail_2');
                            if (!empty($profileImage)): ?>
                                <img src="<?php echo esc_url($profileImage['url']); ?>" alt="<?php echo esc_attr($profileImage['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <ul class="work-details__list">
                            <li class="work-details__list-item">
                                <?php
                                $hobbies = get_field('role');
                                if ($hobbies): ?>
                                    <ul>
                                        <?php foreach ($hobbies as $hobby): ?>
                                            <li>
                                                <?php
                                                echo $hobby['label'];
                                                ?>
                                            </li>
                                        <?php endforeach; ?>
                                        <ul>
                                        <?php endif; ?>
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Work type:</h3>
                        <span class="work-details__description-text">
                            <?php
                            $hobbies = get_field('worktype');
                            if ($hobbies): ?>
                                <ul>
                                    <?php foreach ($hobbies as $hobby): ?>
                                        <li>
                                            <?php
                                            echo $hobby['label'];
                                            ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <ul>
                                    <?php endif; ?>
                        </span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">URL:
                            <?php
                            $link = get_field('link');
                            if ($link):
                                // URLを取得
                                $linkUrl = $link['url'];
                                // タイトルを取得
                                $linkTitle = $link['title'];
                                // 新しいタブで開く
                                $linkTarget = $link['target'];
                            ?>
                                <a class="button" href="<?php echo esc_url($linkUrl); ?>" target="<?php echo esc_attr($linkTarget); ?>"><?php echo esc_html($linkTitle); ?></a>
                            <?php endif; ?>
                        </h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item--remark">
                                <a href="<?php echo home_url(); ?>#" target="_blank">
                                    <span class="work-details__remark">
                                        <?php
                                        $link = get_field('url');
                                        if ($link):
                                            $linkUrl = $link['url'];
                                            $linkTitle = $link['title'];
                                            $linkTarget = $link['target'];
                                        ?>
                                            <a class="button" href="<?php echo esc_url($linkUrl); ?>" target="<?php echo esc_attr($linkTarget); ?>"><?php echo esc_html($linkTitle); ?></a>
                                        <?php endif; ?>
                                    </span></a>
                            </li>
                            <li class="work-details__description-list-item--remark">
                                <span class="work-details__remark"><?php the_field('remark_1'); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Production period:</h3>
                        <span class="work-details__description-text"><?php the_field('schedule'); ?></span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Role:</h3>
                        <span class="work-details__description-text">
                            <?php
                            $hobbies = get_field('role');
                            if ($hobbies): ?>
                                <ul>
                                    <?php foreach ($hobbies as $hobby): ?>
                                        <li>
                                            <?php
                                            echo $hobby['label'];
                                            ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <ul>
                                    <?php endif; ?>
                        </span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Skills:</h3>
                        <span class="work-details__description-text">
                        <?php
                            $hobbies = get_field('skills');
                            if ($hobbies): ?>
                                <ul>
                                    <?php foreach ($hobbies as $hobby): ?>
                                        <li>
                                            <?php
                                            echo $hobby['label'];
                                            ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <ul>
                                    <?php endif; ?>
                        </span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Goal:</h3>
                        <span class="work-details__description-text"><?php the_field('goal'); ?>.</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Approach:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                <?php the_field('approach'); ?>
                            </li>
                        </ul>
                        <span class="work-details__remark"><?php the_field('remark_2'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/work-10">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/work-01">»</a>
            <!-- <span class="next page-numbers">»</span> -->
        </div>

        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/works" class="view-more__link">See all works</a>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>