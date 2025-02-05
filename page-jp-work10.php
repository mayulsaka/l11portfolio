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
                    <ul class="work-details__list">
                        <li class="work-details__list-item limited">限定公開</li>
                    </ul>
                    <h2 class="work-details__list-title">ランディングページ（脱毛サロン）</h2>
                    <a href="<?php echo home_url(); ?>#" target="_blank">
                        <div class="work-details__image-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_limited_org.jpg" alt="" class="work-details__image">
                        </div>
                    </a>
                    <ul class="work-details__list">
                        <li class="work-details__list-item">コーディング</li>
                    </ul>
                </div>
                <div class="work-details__box-description">
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">制作物:</h3>
                        <span class="work-details__description-text">ランディングページ（脱毛サロン）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">URL:<a href="<?php echo home_url(); ?>#" target="_blank">#</a></h3>
                        <ul class="work-details__description-list">
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
                        <span class="work-details__description-text">2025/01（2週間）</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">担当領域: </h3>
                        <span class="work-details__description-text">コーディング</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">使用スキル: </h3>
                        <span class="work-details__description-text">HTML、CSS、SASS、JavaScript*、jQuery*、VS Code、Adobe XD、Photoshop (*加工レベル)</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">ゴール: </h3>
                        <span class="work-details__description-text">※こちらは限定公開となっております。
                            ご覧いただく際にはID・パスワードが必要となりますので、閲覧をご希望の方はお問い合わせください。</span>
                    </div>
                    <div class="work-details__description">
                        <h3 class="work-details__description-title">工夫した点:</h3>
                        <ul class="work-details__description-list">
                            <li class="work-details__description-list-item">
                                パーフェクトピクセルを追求しながらデザインカンプに沿ったコーディング
                            </li>
                            <li class="work-details__description-list-item">
                                複雑な装飾を画像で書き出さずに、できる限りコーディングで再現
                            </li>
                            <li class="work-details__description-list-item">
                                レスポンシブデザイン
                            </li>
                            <li class="work-details__description-list-item">
                                一部スマホ表示でのみカルーセルで切り替わる形に実装(Slick)
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
            <a class="prev page-numbers" href="<?php echo home_url(); ?>/jp-work09">«</a>
            <a class="next page-numbers" href="<?php echo home_url(); ?>/jp-work11">»</a>
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