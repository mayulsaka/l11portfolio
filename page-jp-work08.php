<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>坂口真由美 ～トリリンガル・Webクリエイタ～</title>
    <meta name="Robots" content="noindex,nofollow">
    <meta name="description" content="坂口真由美 ～トリリンガル・Webクリエイタ～ ポートフォリオ">
    <meta name="keywords" content="Mayumi Sakaguchi, web creator, Japanese, English, French, 坂口真由美, webクリエイター, 日本語, 英語, フランス語,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="坂口真由美 ～トリリンガル・Webクリエイタ～">
    <meta property="og:description" content="坂口真由美 ～トリリンガル・Webクリエイタ～ ポートフォリオ">
    <meta property="og:url" content="https://mayumi-sakaguchi-dev.com/portfolio-ms">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Mayumi Sakaguchi -Trilingual Web Creator-">
    <link rel="shortcut icon" href="https://mayumi-sakaguchi-dev.com/portfolio-ms/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/main.min.css">
    <link rel="preconnect" href="https://fo/nts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

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
                    <li class="breadcrumb__item">制作物概要</li>
                </ol>
            </div>
        </div>

        <!-- Works works -->

        <section id="work-details" class="work-details">
            <div class="work-details__container">
                <h1 class="work-details__title">制作物概要</h1>
                <div class="work-details__box">
                    <div class="work-details__box-link">
                        <ul class="work-details__list">
                            <li class="work-details__list-item limited">限定公開</li>
                        </ul>
                        <h2 class="work-details__list-title">ランディングページ（学習塾）</h2>
                        <div class="work-details__image-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited_org.jpg" alt="" class="work-details__image">
                        </div>
                        <ul class="work-details__list">
                            <li class="work-details__list-item">コーディング</li>
                        </ul>
                    </div>
                    <div class="work-details__box-description">
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">制作物:</h3>
                            <span class="work-details__description-text">ランディングページ（学習塾）</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">URL:</h3>
                            <ul class="work-details__description-list--remark">
                                <li class="work-details__description-list-item--url">
                                    <span class="work-details__description-text"><a href="http://demo.mayumi-sakaguchi-dev.com/lp2" target="_blank">http://demo.mayumi-sakaguchi-dev.com/lp2</a></span>
                                </li>
                                <li class="work-details__description-list-item--remark">
                                    <span class="work-details__remark">※こちらは限定公開となっております。ご覧いただく際にはパスワードが必要となりますので、閲覧をご希望の方はお問い合わせください。</span>
                                </li>
                                <li class="work-details__description-list-item--remark">
                                    <span class="work-details__remark">※デモ制作のため、一部のみ制作しています。そのためリンク先がエラー表示となる場合があります。</span>
                                </li>
                            </ul>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">制作期間: </h3>
                            <span class="work-details__description-text">2024/11（2週間）</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">担当領域: </h3>
                            <span class="work-details__description-text">コーディング</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">使用スキル: </h3>
                            <span class="work-details__description-text">HTML、CSS、JavaScript*、jQuery*、VS Code、Adobe XD、Photoshop (*加工レベル)</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">ゴール: </h3>
                            <span class="work-details__description-text">パーフェクトピクセルを追求しながらデザインカンプに沿ったコーディング</span>
                        </div>
                        <div class="work-details__description">
                            <h3 class="work-details__description-title">工夫した点:</h3>
                            <ul class="work-details__description-list">
                                <li class="work-details__description-list-item">
                                    複雑な装飾を画像で書き出さずに、できる限りコーディングで再現
                                </li>
                                <li class="work-details__description-list-item">
                                    レスポンシブデザイン
                                </li>
                                <li class="work-details__description-list-item">
                                    ヘッダーのアンカーリンクにスムーススクロールを実装
                                </li>
                                <li class="work-details__description-list-item">
                                    スマホ用にハンバーガーメニューを実装（スライド式）
                                </li>
                                <li class="work-details__description-list-item">
                                    一部タブ切り替えで実装（HTMLとCSSのみ
                                </li>
                                <li class="work-details__description-list-item">
                                    一部ボタンをフォームボタンとして実装
                                </li>
                                <li class="work-details__description-list-item">
                                    一部の画像をマウスオーバーすると拡大する形に実装
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work07">«</a>
                <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work09">»</a>
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