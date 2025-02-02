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
                        <a href="<?php echo home_url(); ?>/work11" class="works__link website">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Coding</li>
                            </ul>
                            <p class="works__list-title">Website (Agricultural equipment maker)</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">Limited access</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work10" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Coding</li>
                            </ul>
                            <p class="works__list-title">Landing page (Hair removal salon)</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">Limited access</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work09" class="works__link lp>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Coding</li>
                            </ul>
                            <p class="works__list-title">Landing page (Beauty cosmetics)</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">Limited access</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work08" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Coding</li>
                            </ul>
                            <p class="works__list-title">Landing page (Cram school)</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">Limited access</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work01" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_01.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Planning</li>
                                <li class="works__list-item">Direction</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">Writing</li>
                                <li class="works__list-item">Design</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">Coding</li>
                                <li class="works__list-item">WordPress</li>
                            </ul>
                            <p class="works__list-title">Landing page (AI translation school)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work02" class="works__link website">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_02.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Planning</li>
                                <li class="works__list-item">Writing</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">Translation</li>
                                <li class="works__list-item">Design</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">Coding</li>
                                <li class="works__list-item">WordPress</li>
                            </ul>
                            <p class="works__list-title">Website (portfolio)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work03" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_03.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Design</li>
                            </ul>
                            <p class="works__list-title">Landing page (Web consulting)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work04" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Design</li>
                            </ul>
                            <p class="works__list-title">Graphic (Japanese dining bar menu)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work05" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_05.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Writing</li>
                                <li class="works__list-item">Design</li>
                            </ul>
                            <p class="works__list-title">Banner (Japanese dining bar to open)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work06" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_06.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Writing</li>
                                <li class="works__list-item">Design</li>
                            </ul>
                            <p class="works__list-title">Banner (food brand's campaign)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box">
                        <a href="<?php echo home_url(); ?>/work07" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_07.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">Writing</li>
                                <li class="works__list-item">Design</li>
                            </ul>
                            <p class="works__list-title">Video thumbnail (side business ad)</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">See detail</li>
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

        <?php get_footer(); ?>