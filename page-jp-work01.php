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
                    <a href="https://mayumi-sakaguchi-dev.com/ai-trans-academy" target="_blank">
                        <h2 class="work-details__list-title">ランディングページ（AI翻訳スクール）</h2>
                        <div class="work-details__image-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_01.png" alt="" class="work-details__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_detail_01_sp.png" alt="" class="work-details__image">
                        </div>
                        <ul class="work-details__list">
                            <li class="work-details__list-item">プランニング</li>
                            <li class="work-details__list-item">ディレクション</li>
                            <li class="work-details__list-item">ライティング</li>
                            <li class="work-details__list-item">デザイン</li>
                            <li class="work-details__list-item">コーディング</li>
                            <li class="work-details__list-item">WordPress化</li>
                        </ul>
                    </a>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作物:</h3>
                        <span class="work-details__description-text">ランディングページ</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">URL:</h3>
                        <span class="work-details__description-text"><a href="https://mayumi-sakaguchi-dev.com/ai-trans-academy" target="_blank"></a></span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作期間: </h3>
                        <span class="work-details__description-text">2024/01-02（2カ月）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">担当領域: </h3>
                        <span class="work-details__description-text">プラニング、ディレクション、コピーライティング、デザイン、コーディング、WordPress独自テーマ</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">使用スキル: </h3>
                        <span class="work-details__description-text">Adobe XD、Figma、Photoshop、Illustrator、HTML、CSS、SASS、JavaScript*、jQuery*、VS Code、WordPress、PHP* (*加工レベル)</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ゴール: </h3>
                        <span class="work-details__description-text">SNS広告からリンクするLPを作成して、新規顧客を獲得する。</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ターゲット: </h3>
                        <span class="work-details__description-text">翻訳やAIに関心の高い、あらゆる世代の日本人</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">工夫した点:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                ベースカラーやトーンを統一しつつ、各セクションごとに異なるデザインを施し、デザインやストーリーにメリハリを持たせました。
                            </li>
                            <li class="work-details__description-list-item">
                                興味（この商品は私に向いているかも！）→理解（仕組みがわかる！）→満足（期待できる、信頼できそう！）という流れを自然に作り出せるデザインを心がけました。
                            </li>
                            <li class="work-details__description-list-item">
                                親しみやすく読みやすい書体（ゴシック体）を使用しました。
                            </li>
                            <li class="work-details__description-list-item">
                                幅広い年齢層に読みやすい大きめサイズの文字を使用しました。
                            </li>
                            <li class="work-details__description-list-item">
                                柔らかく明るい感じのグリーンとピンクの組み合わせで、世代や性別を問わずアピールしやすいカラーを採用しました。
                            </li>
                            <li class="work-details__description-list-item">
                                美しく加工された画像よりも、よりリアルに見える画像を選択しています。
                            </li>
                            <li class="work-details__description-list-item">
                                セクションごとにさまざまな表情のインストラクターの写真を挿入し、どんな状況でも常にそばにいる感じを演出しました。
                                等。
                            </li>
                            <li class="work-details__description-list-item">
                                ※詳しくは <b><a href="https://drive.google.com/file/d/1fPKcQuDo0wVvAIHTfTNvK8nvO1-xK8T2/view?usp=sharing" target="_blank">AI-Trans Academy プレゼンテーション-</a></b> をご覧ください。(Japanese only)
                            </li>
                        </ul>
                    </div>
                    <span class="work-details__remark">※こちらの講座はスクール課題として作成した架空のものであり、実在いたしません。</span>
                </div>
            </div>
        </div>

        <div class="pagination">
            <!-- <span class="prev page-numbers">«</span> -->
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work-11">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work-02">»</a>
        </div>

        <div class="view-more">
            <div class="view-more__container">
                <a href="<?php echo home_url(); ?>/jp-works" class="view-more__link">制作実績一覧へ</a>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>