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
                        <a href="https://mayumi-sakaguchi-dev.com/work_03_org.png" class="work-details__link" target="_blank">
                            <h2 class="work-details__list-title">Landing page (Web consulting)</h2>
                            <div class="work-details__image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_03.png" alt="" class="work-details__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_03_sp.png" alt="" class="work-details__image">
                            </div>
                            <ul class="work-details__list">
                                <li class="work-details__list-item">Design</li>
                            </ul>
                        </a>
                    </div>
                    <div class="work-details__box-description">
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Work type:</h3>
                            <span class="work-details__description-text">Landing page design</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">URL:</h3>
                            <span class="work-details__description-text">None</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Schedule:</h3>
                            <span class="work-details__description-text">2023/07(2 weeks)</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Role:</h3>
                            <span class="work-details__description-text">Design</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Skills:</h3>
                            <span class="work-details__description-text">Adobe XD, Photoshop, Illustrator</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Goal:</h3>
                            <span class="work-details__description-text">To create a Landing page that links from Social Media ad to increase new customers.</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Target:</h3>
                            <span class="work-details__description-text">Japanese men in their late 20s to 40s working for Web production companies.</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Approach:</h3>
                            <ul class="work-details__description-list">
                                <li class="work-details__description-list-item">
                                    Blue based design to catch an eye of young men, and to represent professionalism and sincerity.
                                </li>
                                <li class="work-details__description-list-item">
                                    Tried to appeal professionalism since the target audience should know the industry well.
                                    Etc.
                                </li>
                            </ul>
                        </div>
                        <span class="work-details__remark">*This service a fictitious one created as a school assignment.</span>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a class="prev page-numbers" href="<?php echo home_url(); ?>/work02">«</a>
                <a class="next page-numbers" href="<?php echo home_url(); ?>/work04">»</a>
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