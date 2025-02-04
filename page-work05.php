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
                        <a href="https://mayumi-sakaguchi-dev.com/work_05_org.jpg" class="work-details__link" target="_blank">
                            <h2 class="work-details__list-title">Banner (Japanese dining bar to open)</h2>
                            <div class="work-details__image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_05_org.jpg" alt="" class="work-details__image">
                            </div>
                            <ul class="work-details__list">
                                <li class="work-details__list-item">Writing</li>
                                <li class="work-details__list-item">Design</li>
                            </ul>
                        </a>
                    </div>
                    <div class="work-details__box-description">
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Work type:</h3>
                            <span class="work-details__description-text">Social media ad</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">URL:</h3>
                            <span class="work-details__description-text">None</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Schedule:</h3>
                            <span class="work-details__description-text">2024/05 (1.5 days)</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Role:</h3>
                            <span class="work-details__description-text">Copy writing, design</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Skills:</h3>
                            <span class="work-details__description-text">Photoshop</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Goal:</h3>
                            <span class="work-details__description-text">To create an ad for a sophisticated Japanese style dining bar (for which I had designed a menu) for its opening, emphasizing its attractive points, to invite people (especially local people who might become repeaters) to come.</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Target:</h3>
                            <span class="work-details__description-text">Tama-city citizens above 18 years old who want to enjoy drinking and eating in a relatively calm and relaxed Japanese atmosphere similar to a luxury hotel or Japanese restaurant, ever increasing non-Japanese tourists who loves Japanese culture, and mothers with kids (lunch time).</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">Approach:</h3>
                            <ul class="work-details__description-list">
                                <li class="work-details__description-list-item">
                                    Renovation of a Japanese traditional house into a Japanese style dining bar, while preserving the atmosphere of the good old days of Japan (Showa era).
                                </li>
                                <li class="work-details__description-list-item">
                                    Modest and sophisticated design to express beauty of Japanese culture.
                                </li>
                                <li class="work-details__description-list-item">
                                    Tried to create an atmosphere where people can relieve their fatigue and forget about stressful daily life, and to provide a place for people without enough time and money a moment as if they are travelling far.
                                </li>
                                <li class="work-details__description-list-item">
                                    To offer exquisite cuisine prepared by a former 5-star hotel chef at affordable prices.
                                </li>
                                <li class="work-details__description-list-item">
                                    Commitment to pesticide-free and additive-free ingredients carefully selected by the chef himself.
                                </li>
                                <li class="work-details__description-list-item">
                                    All items are half price for 5 days after its openings.
                                    Etc.
                                </li>
                            </ul>
                        </div>
                        <span class="work-details__remark">*This dining bar is a fictitious one created as a school assignment and does not actually exist.</span>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a class="prev page-numbers" href="<?php echo home_url(); ?>/work-04">«</a>
                <a class="next page-numbers" href="<?php echo home_url(); ?>/work-06">»</a>
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