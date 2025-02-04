<?php get_header(); ?>

<!-- Header -->

<header class="header">
    <div class="header__container">
        <a href="<?php echo home_url(); ?>" class="header__title-link">
            <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="">
        </a>
        <nav class="header__nav nav" id="js-nav">
            <ul class="header__nav-list">
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>" class="header__nav-link header__current">Top</a></li>
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

    <!-- Main visual -->

    <section class="main-visual">
        <div class="main-visual__container">
            <h1 class="main-visual__title animate__animated animate__zoomIn animate__slow">Mayumi Sakaguchi</h1>
            <p class="main-visual__sub-title animate__animated animate__zoomIn animate__slow animate__delay-1s 2s">Trilingual Web Creator</p>
            <p class="main-visual__text animate__animated animate__zoomIn animate__slow animate__delay-2s 3s">Passionate about solving valued clients' problems across the world</p>
        </div>
    </section>

    <!-- Works carousel  -->

    <section id="works" class="works-carousel">
        <div class="works-carousel__container">
            <h2 class="works-carousel__title">Works</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work01" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_01.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Planning</li>
                                <li class="swiper-slide__work-list-item">Direction</li>
                            </ul>
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Writing</li>
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Coding</li>
                                <li class="swiper-slide__work-list-item">WordPress</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Landing page (AI translation school)</h3>
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item limited">Limited access</li>
                            </ul>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work02" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_02.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Planning</li>
                                <li class="swiper-slide__work-list-item">Writing</li>
                            </ul>
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Translation</li>
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Coding</li>
                                <li class="swiper-slide__work-list-item">WordPress</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Website (portfolio)</h3>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work03" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_03.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Landing page (Web consulting)</h3>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work04" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Graphic (Japanese dining bar menu)</h3>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work05" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_05.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Writing</li>
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Banner (Japanese dining bar to open)</h3>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work06" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_06.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Writing</li>
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Banner (food brand's campaign)</h3>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php echo home_url(); ?>/work07" class="swiper-slide__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_07.png" class="swiper-slide__image" alt="">
                            <ul class="swiper-slide__work-list">
                                <li class="swiper-slide__work-list-item">Writing</li>
                                <li class="swiper-slide__work-list-item">Design</li>
                            </ul>
                            <h3 class="swiper-slide__work-title">Video thumbnail (side business ad)</h3>
                            <ul class="swiper-slide__work-list">
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/works" class="view-more__link">See all works</a>
            </div>
        </div>
    </section>

    <!-- Services -->

    <section id="services" class="services">
        <div class="services__container">
            <h2 class="services__title">Services</h2>
            <ul class="services__list">
                <li class="services__list-item">
                    <h3 class="services__list-title services__service1">Website creation</h3>
                    <p class="services__list-detail">Design, coding, WordPress theme development, etc.</p>
                </li>
                <li class="services__list-item">
                    <h3 class="services__list-title services__service2">Graphic design</h3>
                    <p class="services__list-detail">Banner, Thumbnail, Leaflet, business card, etc.</p>
                </li>
                <li class="services__list-item">
                    <h3 class="services__list-title services__service3">PowerPoint design</h3>
                    <p class="services__list-detail">Proposal, presentation material, webinar material, report, etc.</p>
                </li>
                <li class="services__list-item">
                    <h3 class="services__list-title services__service4">Language support</h3>
                    <p class="services__list-detail">Japanese, English, French</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- News latest -->

    <section id="news" class="news-latest">
        <div class="news-latest__container">
            <h2 class="news-latest__title">News</h2>
            <div class="news-latest__item-group">
                <ul class="news-latest__item">
                    <li class="news-latest__date">2023.06.07<span class="news-latest__tag new blinking">New</span><span class="news-latest__tag">Information</span></li>
                    <li class="news-latest__data">
                        <a href="<?php echo home_url(); ?>/works" class="news-latest__news-title">My works gallery has been updated.</a>
                    </li>
                </ul>
                <ul class="news-latest__item">
                    <li class="news-latest__date">2023.05.15<span class="news-latest__tag">Information</span></li>
                    <li class="news-latest__data">
                        <span class="news-latest__news-title">My portfolio site has opened.</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="view-more">
                <div class="view-more__container">
                    <a href="<?php echo home_url(); ?>/news" class="view-more__link">See all news</a>
                </div>
            </div> -->
    </section>

    <!-- Profile -->

    <section id="profile" class="profile">
        <div class="profile__container">
            <h2 class="profile__title">Profile</h2>
            <div class="profile__wrapper">
                <div class="profile__profile-image-box">
                    <img class="profile__profile-image" src="<?php echo get_template_directory_uri(); ?>/assets/image/profile.png" alt="">
                </div>
                <div class="profile__profile-text-box">
                    <h3 class="profile__profile-title">Mayumi Sakaguchi</h3>
                    <p class="profile__profile-text">I am a <b>Japanese</b> female born in Japan and <b>raised globally</b> (in Japan, France, Indonesia).</p>
                    <p class="profile__profile-text">I graduated from American University of Paris and Sorbonne University of Paris <b>majoring in languages and international business</b>, and <b>I have worked internationally</b> for various companies in Japan and in France.</p>
                    <p class="profile__profile-text"> I have developed my career in non-Japanese executive assistance and translation, then from 2014 in <b>Website creation</b>, and also in <b>Desktop Publishing (DTP)</b> since 2021.</p>
                    <p class="profile__profile-text">I completed <b>Web and DTP master courses</b> at a few IT schools in the past, and this year I have accomplished my studies in <b>UX design and Web coding</b> to further develop my expertise.</p>
                    <p class="profile__profile-text">I am <b>passionate about solving valued clients' problems across the world</b> through Web creation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile -->

    <section id="contact" class="contact">
        <div class="contact__container">
            <h2 class="contact__title">Contact</h2>
            <div class="contact__wrapper">
                <!-- Form -->
                <?php echo do_shortcode('[contact-form-7 id="02ff249" title="Contact"]'); ?>
                <!-- <form class="form">
                        <div class="form__item">
                            <label for="name" class="form__label">
                                <span class="form__required">Your name <span class="asterisk">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="text" name="name" id="name" placeholder="Ex. Mayumi Sakaguchi" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="email" class="form__label">
                                <span class="form__required">E-mail address <span class="asterisk">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="email" name="email" id="email" placeholder="Ex. mayumi.sakaguchi@sample.com" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="email" class="form__label">
                                <span class="form__required">E-mail address (for verification)<span class="asterisk">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="email" name="emailCfm" id="email2" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="tel" class="form__label">
                                <span class="form__required">Tel<span class="asterisk">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="tel" name="tel" id="tel" placeholder="Ex. 090-1234-5678" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="company" class="form__label">
                                <span class="form__optional">Company name</span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="text" name="company" id="company" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="department" class="form__label">
                                <span class="form__optional">Department</span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="text" name="department" id="department" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="inquiry" class="form__label">
                                <span class="form__required">Inquiry<span class="asterisk">*</span></span>
                            </label>
                            <div class="form__input-wrapper form__inquiry-box">
                                <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="form__textarea"></textarea>
                            </div>
                        </div>
                        <div class="form__item form__privacy-wrapper">
                            <span class="form__required">Please check the privacy policy below before clicking the send button.<span class="asterisk">*</span></span>
                        </div>
                        <div class="form__privacy-box">
                            <p class="form__privacy-text">
                                We recognize the importance of personal information obtained through this site, consider its protection to be a social responsibility, comply with related laws, and strive to handle personal information appropriately.
                            </p>
                            <p class="form__privacy-text">
                                <b>1. Basic policy regarding personal information protection</b><br>
                                We strive to protect and appropriately handle personal information handled in the course of business, and make every effort to prevent unauthorized access, loss, and leakage, and strive to ensure the safe operation of personal information.
                            </p>
                            <p class="form__privacy-text">
                                <b>2. Regarding acquisition of personal information</b><br>
                                We will not collect or use personal information without the consent of the individual.
                                Even if we obtain the consent of the person in question, we will clarify the purpose and scope of use in advance and use the information only within the scope of consent.
                                Also, when we receive data containing personal information from a third party, we will only do so with an appropriate agreement to protect personal information.
                            </p>
                            <p class="form__privacy-text">
                                <b>3. Regarding the use of personal information</b><br>
                                We will use personal information within the scope of the purpose for which it was acquired and to the extent necessary for the performance of our business.
                                When using personal information for purposes that have not been previously notified, we will do so after obtaining the consent of the individual in advance.
                            </p>
                        </div>
                        <div class="form__submit-button">
                            <input type="submit" value="SEND" class="form__input">
                        </div>
                    </form> -->
            </div>
            <p>
                This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
            </p>
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