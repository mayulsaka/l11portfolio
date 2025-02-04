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
                <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>/" class="breadcrumb__link">Top</a></li>
                <li class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>/works" class="breadcrumb__link">Works</a></li>
                <li class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                <li class="breadcrumb__item">Work details</li>
            </ol>
        </div>
    </div>


        <!-- Works works -->

        <section id="work-details" class="work-details">
            <div class="work-details__container">
                <h1 class="work-details__title">Work details</h1>

                <div class="work-details__box">
                    <div class="work-details__box-link">
                        <a href="https://mayumi-sakaguchi-dev.com/work_04_org.jpg" class="work-details__link" target="_blank">
                            <h2 class="work-details__list-title">Graphic (Japanese dining bar menu)</h2>
                            <div class="work-details__image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04_org_A.jpg" alt="" class="work-details__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04_org_B.jpg" alt="" class="work-details__image">
                            </div>
                            <ul class="work-details__list">
                                <li class="work-details__list-item">Design</li>
                            </ul>
                        </a>
                    </div>
                    <div class="work-details__box-description">
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Work type:</h3>
                            <span class="work-details__description-text">Graphic design</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">URL:</h3>
                            <span class="work-details__description-text">None</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Schedule:</h3>
                            <span class="work-details__description-text">2024/04 (3 days)</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Role:</h3>
                            <span class="work-details__description-text">Design</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Skills:</h3>
                            <span class="work-details__description-text">Photoshop</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Goal:</h3>
                            <span class="work-details__description-text">To create a menu for a sophisticated Japanese style dining bar, while expressing the beauty of Japanese culture and cuisine.</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Target:</h3>
                            <span class="work-details__description-text">Japanese and non-Japanese clients above 18 years old who want to enjoy drinking and eating Japanese dishes at a relaxed Japanese style dining bar.</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Approach:</h3>
                            <ul class="work-details__description-list">
                                <li class="work-details__description-list-item">
                                    Orange based design to express warm and relaxed atmosphere and to highlight food photos.
                                </li>
                                <li class="work-details__description-list-item">
                                    Created the menu only in Japanese to keep Japanese atmosphere, while providing a photo for each food to help non-Japanese clients choose their foods.
                                    Etc.
                                </li>
                            </ul>
                        </div>
                        <span class="work-details__remark">*This dining bar menu is a fictitious one created as a school assignment and does not actually exist.</span>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a class="prev page-numbers" href="<?php echo home_url(); ?>/work03">«</a>
                <a class="next page-numbers" href="<?php echo home_url(); ?>/work05">»</a>
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