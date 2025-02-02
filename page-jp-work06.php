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
                    <a href="https://mayumi-sakaguchi-dev.com/work_06_org.jpg" class="work-details__link" target="_blank">
                        <h2 class="work-details__list-title">バナー（食品キャンペーン告知）</h2>
                        <div class="work-details__image-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_06_org.jpg" alt="" class="work-details__image">
                        </div>
                        <ul class="work-details__list">
                            <li class="work-details__list-item">ライティング</li>
                            <li class="work-details__list-item">デザイン</li>
                        </ul>
                    </a>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作物:</h3>
                        <span class="work-details__description-text">バナー（食品キャンペーン告知）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">URL:</h3>
                        <span class="work-details__description-text">無し</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作期間: </h3>
                        <span class="work-details__description-text">2024/12（1.5日）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">担当領域: </h3>
                        <span class="work-details__description-text">コピーライティング、デザイン</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">使用スキル </h3>
                        <span class="work-details__description-text">Photoshop</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ゴール: </h3>
                        <span class="work-details__description-text">新商品をきっかけにローズガーデンのブランド認知を高めつつ、キャンペーンを用いて販売サイトへ誘導し、売上を伸ばす。</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ターゲット: </h3>
                        <span class="work-details__description-text">「自然の美しさや上質な時間を大切にする40 代から50 代の大人の女性」に、薔薇の優雅さをさらに身近に感じながら、特別な癒しとリラックス時間をお楽しみいただくことを通して、ブランド価値を高めていけるライティングを意識しました。</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">工夫した点:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                お客様が本商品を購入することで得られるベネフィットも強調するため、上部にお客様が得られるベネフィットを描く画像を用意しました（生成AI）。
                            </li>
                            <li class="work-details__description-list-item">
                                ローズガーデンのイメージ（自然の美しさと上質さを提供する特別な空間）をダイレクトに強調できるような画像の生成を試みました。
                                等。
                            </li>
                        </ul>
                    </div>
                    <span class="work-details__remark">※こちらの会社や商品はスクール課題として作成した架空のものであり、実在いたしません。</span>
                </div>
            </div>
        </div>

        <div class="pagination">
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work-05">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work-07">»</a>
        </div>

        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/jp-works" class="view-more__link">制作実績一覧へ</a>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>