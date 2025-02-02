<?php get_header(); ?>

<!-- Header -->

<header class="header">
    <div class="header__container">
        <a href="<?php echo home_url(); ?>/jp" class="header__title-link">
            <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.svg" alt="">
        </a>
        <nav class="header__nav nav" id="js-nav">
            <ul class="header__nav-list">
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp" class="header__nav-link">トップ</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp-works" class="header__nav-link header__current">制作実績</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp#services" class="header__nav-link">サービス内容</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp#news" class="header__nav-link">お知らせ</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp#profile" class="header__nav-link">プロフィール</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/" class="header__nav-link">English</a></li>
                <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp#contact" class="header__nav-link header__nav-contact-btn">お問い合わせ</a></li>
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
                <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>/jp" class="breadcrumb__link">トップ</a></li>
                <li class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>/jp-works" class="breadcrumb__link">制作実績</a></li>
                <li class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                <li class="breadcrumb__item">Work details</li>
            </ol>
        </div>
    </div>

        <!-- Works works -->

        <section id="work-details" class="work-details">
            <div class="work-details__container">
                <h1 class="work-details__title">制作物紹介</h1>

                <div class="work-details__box">
                    <div class="work-details__box-link">
                        <a href="https://mayumi-sakaguchi-dev.com/work_03_org.png" class="work-details__link" target="_blank">
                            <h2 class="work-details__list-title">ランディングページ<span class="line-break">（Webコンサルティング）</span></h2>
                            <div class="work-details__image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_03.png" alt="" class="work-details__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_03_sp.png" alt="" class="work-details__image">
                            </div>
                            <ul class="work-details__list">
                                <li class="work-details__list-item">デザイン</li>
                            </ul>
                        </a>
                    </div>
                    <div class="work-details__box-description">
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">制作物:</h3>
                            <span class="work-details__description-text">ランディングページ（Webコンサルティング）</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">URL:</h3>
                            <span class="work-details__description-text">無し</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">制作期間: </h3>
                            <span class="work-details__description-text">2023/07（2週間）</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">担当領域: </h3>
                            <span class="work-details__description-text">デザイン</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">使用スキル </h3>
                            <span class="work-details__description-text">Adobe XD, Photoshop, Illustrator</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">ゴール: </h3>
                            <span class="work-details__description-text">SNS広告からリンクするランディングページを作成し、新規顧客を獲得する。</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">ターゲット: </h3>
                            <span class="work-details__description-text">Web制作会社に勤める20代後半～40代の日本人男性。</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">工夫した点:</h3>
                            <ul class="work-details__description-list">
                                <li class="work-details__description-list-item">
                                    若者の目を引くブルーを基調としたデザインで、プロ意識と誠実さを表現しています。
                                </li>
                                <li class="work-details__description-list-item">
                                    対象読者は業界に精通している必要があるため、プロフェッショナリズムをアピールするようにしました。
                                    等。
                                </li>
                            </ul>
                        </div>
                        <span class="work-details__remark">※本サービスはスクールの課題として作られた架空のサービスです。</span>
                    </div>
                </div>
            </div>

            <div class="pagination">
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work-02">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work-04">»</a>
        </div>

        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/jp-works" class="view-more__link">制作実績一覧へ</a>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>