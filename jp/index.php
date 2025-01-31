<?php get_header(); ?>

    <!-- Header -->

    <header class="header">
        <div class="header__container">
            <a href="<?php echo home_url(); ?>/jp" class="header__title-link">
                <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.svg" alt="">
            </a>
            <nav class="header__nav nav" id="js-nav">
                <ul class="header__nav-list">
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp" class="header__nav-link header__current">トップ</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>/jp/works" class="header__nav-link">制作実績</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#services" class="header__nav-link">サービス内容</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#news" class="header__nav-link">お知らせ</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#profile" class="header__nav-link">プロフィール</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>" class="header__nav-link">English</a></li>
                    <li class="header__nav-list-item"><a href="<?php echo home_url(); ?>#contact" class="header__nav-link header__nav-contact-btn">お問い合わせ</a></li>
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
                <h1 class="main-visual__title animate__animated animate__zoomIn animate__slow">坂口 真由美</h1>
                <p class="main-visual__sub-title animate__animated animate__zoomIn animate__slow animate__delay-1s 2s">トリリンガル・<span class="line-break">Webクリエイター</span></p>
                <p class="main-visual__text animate__animated animate__zoomIn animate__slow animate__delay-2s 3s">世界のお客様の課題解決のために</p>
            </div>
        </section>

        <!-- Works carousel  -->

        <section id="works" class="works-carousel">
            <div class="works-carousel__container">
                <h2 class="works-carousel__title">制作実績</h2>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_01" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_01.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">プランニング</li>
                                    <li class="swiper-slide__work-list-item">ディレクション</li>
                                </ul>
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">ライティング</li>
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">コーディング</li>
                                    <li class="swiper-slide__work-list-item">WordPress化</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">ランディングページ（AI翻訳スクール）</h3>
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item limited">限定公開</li>
                                </ul>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_02" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_02.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">プランニング</li>
                                    <li class="swiper-slide__work-list-item">ライティング</li>
                                </ul>
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">翻訳</li>
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">コーディング</li>
                                    <li class="swiper-slide__work-list-item">WordPress化</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">ウェブサイト（ポートフォリオ）</h3>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_03" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_03.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">ランディングページ（Webコンサルティング）</h3>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_04" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_04.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">グラフィック（居酒屋メニュー）</h3>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_05" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_05.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">ライティング</li>
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">バナー（居酒屋オープン告知）</h3>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_06" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_06.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">ライティング</li>
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">バナー（食品キャンペーン告知）</h3>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo home_url(); ?>/works#work_07" class="swiper-slide__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/work_07.png" class="swiper-slide__image" alt="">
                                <ul class="swiper-slide__work-list">
                                    <li class="swiper-slide__work-list-item">ライティング</li>
                                    <li class="swiper-slide__work-list-item">デザイン</li>
                                </ul>
                                <h3 class="swiper-slide__work-title">動画サムネイル（副業ノウハウ）</h3>
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
                    <a href="<?php echo home_url(); ?>/jp/works" class="view-more__link">制作実績一覧へ</a>
                </div>
            </div>
        </section>

        <!-- Services -->

        <section id="services" class="services">
            <div class="services__container">
                <h2 class="services__title">サービス内容</h2>
                <ul class="services__list">
                    <li class="services__list-item">
                        <h3 class="services__list-title services__service1">Webサイト制作</h3>
                        <p class="services__list-detail">デザイン、コーディング、WordPressテーマ開発など</p>
                    </li>
                    <li class="services__list-item">
                        <h3 class="services__list-title services__service2">グラフィックデザイン</h3>
                        <p class="services__list-detail">バナー、サムネイル、チラシ、名刺など</p>
                    </li>
                    <li class="services__list-item">
                        <h3 class="services__list-title services__service3">PowerPointデザイン</h3>
                        <p class="services__list-detail">提案書、プレゼン資料、ウェビナー資料、レポートなど</p>
                    </li>
                    <li class="services__list-item">
                        <h3 class="services__list-title services__service4">語学サポート</h3>
                        <p class="services__list-detail">日本語、英語、仏語</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- News latest -->

        <section id="news" class="news-latest">
            <div class="news-latest__container">
                <h2 class="news-latest__title">お知らせ</h2>
                <div class="news-latest__item-group">
                    <ul class="news-latest__item">
                        <li class="news-latest__date">2023.06.07<span class="news-latest__tag new blinking">新着</span><span class="news-latest__tag">お知らせ</span></li>
                        <li class="news-latest__data">
                            <a href="<?php echo home_url(); ?>/works/work_01.html" class="news-latest__news-title">制作実績を更新しました。</a>
                        </li>
                    </ul>
                    <ul class="news-latest__item">
                        <li class="news-latest__date">2023.05.15<span class="news-latest__tag">お知らせ</span></li>
                        <li class="news-latest__data">
                            <span class="news-latest__news-title">ポートフォリオサイトを公開しました。</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="view-more">
                <div class="view-more__container">
                    <a href="<?php echo home_url(); ?>/jp/news" class="view-more__link">See all news</a>
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
                        <h3 class="profile__profile-title">坂口 真由美</h3>
                        <p class="profile__profile-text">私は日本で生まれ、<b>日本とフランスとインドネシア</b>で育ち生活してきました。</p>
                        <p class="profile__profile-text">パリ・アメリカン大学とパリ・ソルボンヌ大学で<b>語学と国際ビジネスを専攻</b>し、これまで日本とフランスで<b>さまざまな分野のグローバル企業</b>で働いてきました。</p>
                        <p class="profile__profile-text">10年以上外国人役員秘書や翻訳のキャリアを積み、その後2014年からは<b>ウェブサイト制作</b>分野で、2021年からは<b>デスクトップ パブリッシング（DTP）</b>分野の仕事もしています。</p>
                        <p class="profile__profile-text">過去にいくつかのIT スクールで <b>Web および DTP マスターコース</b>を修了し、さらに専門知識を高めるために<b>UX デザイン</b>の集中講座を2024年3月に修了しました。</p>
                        <p class="profile__profile-text">これまでの経験や専門知識を活かし、<b>Webサイト制作を通して世界の大切なお客様の課題解決</b>に貢献したいと願っております。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profile -->

        <section id="contact" class="contact">
            <div class="contact__container">
                <h2 class="contact__title">お問い合わせ</h2>
                <div class="contact__wrapper">
                    <!-- Form -->
                    <form class="form">
                        <div class="form__item">
                            <label for="name" class="form__label">
                                <span class="form__must">お名前 <span class="magenta">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="text" name="name" id="name" placeholder="例: 坂口 真由美" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="email" class="form__label">
                                <span class="form__must">メールアドレス <span class="magenta">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="email" name="email" id="email" placeholder="例: mayumi.sakaguchi@sample.com" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="email" class="form__label">
                                <span class="form__must">メールアドレス （確認用）<span class="magenta">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="email" name="emailCfm" id="email2" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="tel" class="form__label">
                                <span class="form__must">電話番号<span class="magenta">*</span></span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="tel" name="tel" id="tel" placeholder="例: 090-1234-5678" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="company" class="form__label">
                                <span class="form__optional">会社名</span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="text" name="company" id="company" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="department" class="form__label">
                                <span class="form__optional">部署名</span>
                            </label>
                            <div class="form__input-wrapper">
                                <input type="text" name="department" id="department" class="form__input">
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="inquiry" class="form__label">
                                <span class="form__must">お問い合わせ内容<span class="magenta">*</span></span>
                            </label>
                            <div class="form__input-wrapper form__inquiry-box">
                                <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="form__textarea"></textarea>
                            </div>
                        </div>
                        <div class="form__item form__privacy-wrapper">
                            <span class="form__must">※以下のプライバシーポリシーをご確認の上、以下の送信ボタンをクリックしてください。<span class="magenta">*</span></span>
                        </div>
                        <div class="form__privacy-box">
                            <p class="form__privacy-text">
                                当サイトにより得た個人情報の重要性を認識し、その保護を社会的責務と捉え、関連する法令を遵守し、個人情報の適切な取り扱いに努めます。
                            </p>
                            <p class="form__privacy-text">
                                <b>1. 個人情報保護に関する基本方針</b><br>
                                業務上で扱う個人情報の保護と適切な取り扱いに努め、不正アクセスや紛失、漏洩の防止に対して最大限の努力を行い、個人情報の安全な運用に務めます。
                            </p>
                            <p class="form__privacy-text">
                                <b>2. 個人情報の取得について</b><br>
                                個人情報に関して、ご本人の同意なく無断で収集、利用することはいたしません。
                                ご本人の同意を得る場合も、利用目的と範囲を事前に明確にし、同意を得た範囲でのみ使用致します。
                                また、第三者から個人情報を含むデータを受け取る場合も、個人情報保護の適切な合意の下でのみ受領いたします。
                            </p>
                            <p class="form__privacy-text">
                                <b>3. 個人情報の利用について</b><br>
                                個人情報を取得した利用目的の範囲内で、業務の遂行上必要な限りにおいて、利用します。
                                事前に通知されていない目的で個人情報を利用する場合は、予めご本人の同意を得た上で行います。
                            </p>
                        </div>
                        <div class="form__submit-button">
                            <input type="submit" value="送信する" class="form__input">
                        </div>
                    </form>
                </div>
            </div>
        </section>

    <?php get_footer(); ?>