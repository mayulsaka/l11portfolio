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

    <!-- Header  -->

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
                    <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>/jp" class="breadcrumb__link">Top</a></li>
                    <li class="breadcrumb__item"><img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                    <li class="breadcrumb__item">制作実績</li>
                </ol>
            </div>
        </div>

        <section id="works" class="works">
            <div class="works__container">
                <h1 class="works__title">制作実績</h1>

                <ul class="filter-list">
                    <li data-filter="all" class="nav-item is-active"><span>すべて</span></li>
                    <li data-filter="cat1" class="nav-item"><span>ウェブサイト</span></li>
                    <li data-filter="cat2" class="nav-item"><span>ランディングページ</span></li>
                    <li data-filter="cat3" class="nav-item"><span>その他</span></li>
                </ul>

                <div class="filter-item">
                    <div class="works__box" data-item="cat1">
                        <a href="<?php echo home_url(); ?>/jp-work11" class="works__link website">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">コーディング</li>
                            </ul>
                            <p class="works__list-title">企業Webサイト（農業機器メーカー）</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">限定公開</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat2">
                        <a href="<?php echo home_url(); ?>/jp-work10" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">コーディング</li>
                            </ul>
                            <p class="works__list-title">ランディングページ（脱毛サロン）</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">限定公開</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat2">
                        <a href="<?php echo home_url(); ?>/jp-work09" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">コーディング</li>
                            </ul>
                            <p class="works__list-title">ランディングページ（美容コスメ）</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">限定公開</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat2">
                        <a href="<?php echo home_url(); ?>/jp-work08" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">コーディング</li>
                            </ul>
                            <p class="works__list-title">ランディングページ（学習塾）</p>
                            <ul class="works__list">
                                <li class="works__list-item limited">限定公開</li>
                            </ul>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat2">
                        <a href="<?php echo home_url(); ?>/jp-work01" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_01.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">プランニング</li>
                                <li class="works__list-item">ディレクション</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">ライティング</li>
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">コーディング</li>
                                <li class="works__list-item">WordPress化</li>
                            </ul>
                            <p class="works__list-title">ランディングページ（AI翻訳スクール）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat1">
                        <a href="<?php echo home_url(); ?>/jp-work02" class="works__link website">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_02.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">プランニング</li>
                                <li class="works__list-item">ライティング</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">翻訳</li>
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <ul class="works__list">
                                <li class="works__list-item">コーディング</li>
                                <li class="works__list-item">WordPress化</li>
                            </ul>
                            <p class="works__list-title">ウェブサイト（ポートフォリオ）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat2">
                        <a href="<?php echo home_url(); ?>/jp-work03" class="works__link lp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_03.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <p class="works__list-title">ランディングページ（Webコンサルティング）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat3">
                        <a href="<?php echo home_url(); ?>/jp-work04" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <p class="works__list-title">グラフィック（居酒屋メニュー）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat3">
                        <a href="<?php echo home_url(); ?>/jp-work05" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_05.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">ライティング</li>
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <p class="works__list-title">バナー（居酒屋オープン告知）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat3">
                        <a href="<?php echo home_url(); ?>/jp-work06" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_06.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">ライティング</li>
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <p class="works__list-title">バナー（食品キャンペーン告知）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                    <div class="works__box" data-item="cat3">
                        <a href="<?php echo home_url(); ?>/jp-work07" class="works__link other">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_07.png" class="works__image" alt="">
                            <ul class="works__list">
                                <li class="works__list-item">ライティング</li>
                                <li class="works__list-item">デザイン</li>
                            </ul>
                            <p class="works__list-title">動画サムネイル（副業ノウハウ）</p>
                            <ul class="works__see-more">
                                <li class="works__see-more">詳細を見る</li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                                <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.png" alt=""></li>
                            </ul>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Pagination -->

        <!-- <div class="pagination">
                <a class="pagination__page-numbers prev" href="<?php echo home_url(); ?>/jp/works/work01.html">«</a>
                <span class="pagination__page-numbers current">1</span>
                <a class="pagination__page-numbers" href="<?php echo home_url(); ?>/jp/works/work02.html">2</a>
                <a class="pagination__page-numbers" href="<?php echo home_url(); ?>/jp/works/work03.html">3</a>
                <a class="pagination__page-numbers next" href="<?php echo home_url(); ?>/jp/works/work03.html">»</a>
            </div> -->

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