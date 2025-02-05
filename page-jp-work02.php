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
                    <h2 class="work-details__list-title">ウェブサイト（ポートフォリオ）</h2>
                    <!-- <a href="https://mayumi-sakaguchi-dev.com/ms-portfolio" class="work-details__link" target="_blank"> -->
                    <div class="work-details__image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_02.png" alt="" class="work-details__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_02_sp.png" alt="" class="work-details__image">
                    </div>
                    <!-- </a> -->
                    <ul class="work-details__list">
                        <li class="work-details__list-item">プランニング</li>
                        <li class="work-details__list-item">ライティング</li>
                        <li class="work-details__list-item">翻訳</li>
                        <li class="work-details__list-item">デザイン</li>
                        <li class="work-details__list-item">コーディング</li>
                        <li class="work-details__list-item">WordPress</li>
                    </ul>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作物:</h3>
                        <span class="work-details__description-text">ウェブサイト（ポートフォリオ）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">URL:</h3>
                        <span class="work-details__description-text"><span class="work-details__remark">※当サイト</span></span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作期間: </h3>
                        <span class="work-details__description-text">2024/02-03（1～2週間）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">担当領域: </h3>
                        <span class="work-details__description-text">プラニング、コピーライティング、翻訳、デザイン、コーディング、WordPress独自テーマ</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">使用スキル: </h3>
                        <span class="work-details__description-text">Adobe XD、Figma、Photoshop、Illustrator、翻訳、HTML、CSS、SASS、JavaScript*、jQuery*、VS Code、WordPress、PHP* (*加工レベル)</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ゴール: </h3>
                        <span class="work-details__description-text">私の主な制作実績を紹介する独自ポートフォリオ サイトを作成。</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ターゲット: </h3>
                        <span class="work-details__description-text">世界中のすべての人々、とりわけ採用担当者。</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">工夫した点:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                世界中の人が閲覧できるよう、英語でサイトを作成しました。
                            </li>
                            <li class="work-details__description-list-item">
                                誰にとっても分かりやすくまとまった内容を心がけました
                            </li>
                            <li class="work-details__description-list-item">
                                エネルギーと粘り強さを表現するアースカラー（茶色）と、日の出と希望の花を表現するイエロー系カラーを採用しました。
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work01">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work03">»</a>
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