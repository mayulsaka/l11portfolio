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
                        <a href="https://mayumi-sakaguchi-dev.com/work_04_org.jpg" class="work-details__link" target="_blank">
                            <h2 class="work-details__list-title">グラフィック（居酒屋メニュー）</h2>
                            <div class="work-details__image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04_org_A.jpg" alt="" class="work-details__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04_org_B.jpg" alt="" class="work-details__image">
                            </div>
                            <ul class="work-details__list">
                                <li class="work-details__list-item">デザイン</li>
                            </ul>
                        </a>
                    </div>
                    <div class="work-details__box-description">
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">制作物:</h3>
                            <span class="work-details__description-text">グラフィック（居酒屋メニュー）</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">URL:</h3>
                            <span class="work-details__description-text">無し</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">制作期間: </h3>
                            <span class="work-details__description-text">2024/04（3日間）</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">担当領域: </h3>
                            <span class="work-details__description-text">デザイン</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">使用スキル </h3>
                            <span class="work-details__description-text">Photoshop</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">ゴール: </h3>
                            <span class="work-details__description-text">洗練された雰囲気の居酒屋のメニューを、日本文化や日本食の美を伝える形でデザイン。</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">ターゲット: </h3>
                            <span class="work-details__description-text">落ち着いた雰囲気の居酒屋でお酒や日本食を楽しみたい、18歳以上の日本人および外国籍のお客様。</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">工夫した点:</h3>
                            <ul class="work-details__description-list">
                                <li class="work-details__description-list-item">
                                    オレンジを基調に温かく落ち着いた雰囲気を演出し、食べ物の画像が引き立つ形に仕上げました。
                                </li>
                                <li class="work-details__description-list-item">
                                    和風の雰囲気を壊さないよう日本語のみのメニューを作成し、一方で外国籍のお客様も注文しやすいようにすべての食べ物の写真を含みました。
                                    等。
                                </li>
                            </ul>
                        </div>
                        <span class="work-details__remark">※こちらの居酒屋メニューはスクール課題として作成した架空のものであり、実在いたしません。</span>
                    </div>
                </div>
            </div>

            <div class="pagination">
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work-03">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work-05">»</a>
        </div>

        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/jp-works" class="view-more__link">制作実績一覧へ</a>
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