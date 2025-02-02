<?php get_header(); ?>

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
            <ul class="works__nav">
                <li class="works__nav-item works__current"><a href="<?php echo home_url(); ?>" class="works__nav-link all">すべて</a></li>
                <li class="works__nav-item"><a href="<?php echo home_url(); ?>" class="works__nav-link lp">ランディングページ</a></li>
                <li class="works__nav-item"><a href="<?php echo home_url(); ?>" class="works__nav-link website">ウェブサイト</a></li>
                <li class="works__nav-item"><a href="<?php echo home_url(); ?>" class="works__nav-link other">その他</a></li>
            </ul>
            <div class="works__display">
                <div class="works__box">
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
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
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
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
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
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
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
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
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
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
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
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
                    <a href="<?php echo home_url(); ?>/jp-work03" class="works__link lp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_03.png" class="works__image" alt="">
                        <ul class="works__list">
                            <li class="works__list-item">デザイン</li>
                        </ul>
                        <p class="works__list-title">ランディングページ（Webコンサルティング）</p>
                        <ul class="works__see-more">
                            <li class="works__see-more">詳細を見る</li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
                    <a href="<?php echo home_url(); ?>/jp-work04" class="works__link other">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04.png" class="works__image" alt="">
                        <ul class="works__list">
                            <li class="works__list-item">デザイン</li>
                        </ul>
                        <p class="works__list-title">グラフィック（居酒屋メニュー）</p>
                        <ul class="works__see-more">
                            <li class="works__see-more">詳細を見る</li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
                    <a href="<?php echo home_url(); ?>/jp-work05" class="works__link other">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_05.png" class="works__image" alt="">
                        <ul class="works__list">
                            <li class="works__list-item">ライティング</li>
                            <li class="works__list-item">デザイン</li>
                        </ul>
                        <p class="works__list-title">バナー（居酒屋オープン告知）</p>
                        <ul class="works__see-more">
                            <li class="works__see-more">詳細を見る</li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
                    <a href="<?php echo home_url(); ?>/jp-work06" class="works__link other">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_06.png" class="works__image" alt="">
                        <ul class="works__list">
                            <li class="works__list-item">ライティング</li>
                            <li class="works__list-item">デザイン</li>
                        </ul>
                        <p class="works__list-title">バナー（食品キャンペーン告知）</p>
                        <ul class="works__see-more">
                            <li class="works__see-more">詳細を見る</li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
                <div class="works__box">
                    <a href="<?php echo home_url(); ?>/jp-work07" class="works__link other">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_07.png" class="works__image" alt="">
                        <ul class="works__list">
                            <li class="works__list-item">ライティング</li>
                            <li class="works__list-item">デザイン</li>
                        </ul>
                        <p class="works__list-title">動画サムネイル（副業ノウハウ）</p>
                        <ul class="works__see-more">
                            <li class="works__see-more">詳細を見る</li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                            <li class="works__arrow"><img class="works__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/image/arrow.svg" alt=""></li>
                        </ul>
                    </a>
                </div>
            </div>

            <!-- <div class="pagination">
                    <span class="prev page-numbers">«</span>
                    <span class="pagination__page-numbers current">1</span>
                    <a class="pagination__page-numbers" href="<?php echo home_url(); ?>/jp/works/work_02.html">2</a>
                    <a class="pagination__page-numbers" href="<?php echo home_url(); ?>/jp/works/work_03.html">3</a>
                    <a class="next page-numbers" href="<?php echo home_url(); ?>/jp/works/work_02.html">»</a>
                </div> -->

        </div>
    </section>

    <?php get_footer(); ?>