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
                    <!-- URL -->
                    <a href="<?php the_field('url'); ?>">
                        <ul class="work-details__list">
                            <li class="work-details__list-item limited">
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
                        <!-- タイトル -->
                        <h2 class="work-details__list-title"><?php the_field('title'); ?></h2>
                        <div class="work-details__image-box">
                        <!-- サムネ画像１ -->
                        <img src="<?php the_field('thumbnail_1'); ?>" >
                        <!-- サムネ画像２ -->
                        <img src="<?php the_field('thumbnail_2'); ?>" >
                        </div>
                        <ul class="work-details__list">
                            <li class="work-details__list-item">
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
                        </ul>
                    </a>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Work type:</h3>
                        <span class="work-details__description-text">
                            <!-- 制作物 -->
                            <?php
                            $worktype = get_field('worktype');
                            if ($worktype): ?>
                                <ul>
                                    <?php foreach ($worktype as worktype): ?>
                                        <li>
                                            <?php
                                            echo $worktype['label'];
                                            ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <ul>
                                    <?php endif; ?>
                        </span>
                    </div>
                    <div class="work-details__description">
                        <!-- URL -->
                        <h3 class="work-details__description-title">URL:<a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>
                        </h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item--remark">
                                <!-- 注記１ -->
                                <span class="work-details__remark"><?php the_field('remark_1'); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Production period:</h3>
                        <!-- 制作期間 -->
                        <span class="work-details__description-text"><?php the_field('schedule'); ?></span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Skills:</h3>
                        <span class="work-details__description-text">
                            <!-- 使用スキル -->
                            <?php
                            $skills = get_field('skills');
                            if ($skills): ?>
                                <ul>
                                    <?php foreach ($skills as $skills): ?>
                                        <li>
                                            <?php
                                            echo $skills['label'];
                                            ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <ul>
                                    <?php endif; ?>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Goal:</h3>
                        <!-- ゴール -->
                        <span class="work-details__description-text"><?php the_field('goal'); ?>.</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Approach:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                <!-- 工夫した点 -->
                                <?php the_field('approach'); ?>
                            </li>
                        </ul>
                        <!-- 注記２ -->
                        <span class="work-details__remark"><?php the_field('remark_2'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/">»</a>
        </div>

        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/works" class="view-more__link">See all works</a>
            </div>
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