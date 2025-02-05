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
                    <h2 class="work-details__list-title">Landing page (AI translation school)</h2>
                    <a href="https://mayumi-sakaguchi-dev.com/ai-trans-academy" target="_blank">
                        <div class="work-details__image-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_01.png" alt="" class="work-details__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_01_sp.png" alt="" class="work-details__image">
                        </div>
                    </a>
                    <ul class="work-details__list">
                        <li class="work-details__list-item">Planning</li>
                        <li class="work-details__list-item">Direction</li>
                        <li class="work-details__list-item">Writing</li>
                        <li class="work-details__list-item">Design</li>
                        <li class="work-details__list-item">Coding</li>
                        <li class="work-details__list-item">WordPress</li>
                    </ul>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Work type:</h3>
                        <span class="work-details__description-text">Landing Page creation</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">URL:</h3>
                        <span class="work-details__description-text"><a href="https://mayumi-sakaguchi-dev.com/ai-trans-academy" target="_blank">https://mayumi-sakaguchi-dev.com/ai-trans-academy</a></span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Production period:</h3>
                        <span class="work-details__description-text">2024/01-02(2 months)</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Role:</h3>
                        <span class="work-details__description-text">Planning, direction, writing, design, coding, WordPress theme creation</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Skills:</h3>
                        <span class="work-details__description-text">Adobe XD, Figma, Photoshop, Illustrator, HTML, CSS, SASS, JavaScript*, jQuery*, VS Code, WordPress, PHP* (*modification)</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Goal:</h3>
                        <span class="work-details__description-text">To create a Landing Page that links from Social Media ad to acquire new customers.</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Target:</h3>
                        <span class="work-details__description-text">Japanese of all generations having strong interest in translation and AI.</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">Approach:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                Created a different design for each section while keeping the base color and tone consistent, in order to bring sharpness to the design and story.
                            </li>
                            <li class="work-details__description-list-item">
                                The design allows for a natural flow of Interest (maybe this product is for me!) → Understanding (I see how it works!) → Satisfaction (I can look forward to it, it seems reliable!)
                            </li>
                            <li class="work-details__description-list-item">
                                Familiar and easy-to-read font type (Gothic style).
                            </li>
                            <li class="work-details__description-list-item">
                                Used large fonts that are easy to read for a wide range of age groups.
                            </li>
                            <li class="work-details__description-list-item">
                                Used combination of soft and bright green and pink colors, that is easy to catch the eye of all generations and genders.
                            </li>
                            <li class="work-details__description-list-item">
                                Selected images that look more realistic than beautifully processed ones.
                            </li>
                            <li class="work-details__description-list-item">
                                Inserted instructor's pictures with various facial expressions for each section, in order to create a feeling that she is always there for you in any situation.
                            </li>
                            <li class="work-details__description-list-item--remark">
                                *For more detail, please see <b><a href="https://drive.google.com/file/d/1fPKcQuDo0wVvAIHTfTNvK8nvO1-xK8T2/view?usp=sharing" target="_blank">AI-Trans Academy presentation material</a></b> (Japanese only)
                            </li>
                        </ul>
                    </div>
                    <span class="work-details__remark">*This course is a fictitious one created as a school assignment and does not actually exist.</span>
                </div>
            </div>
        </div>

        <div class="pagination">
            <!-- <span class="prev page-numbers">«</span> -->
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/work11">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/work02">»</a>
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