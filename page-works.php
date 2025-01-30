<?php get_header(); ?>

<header class="header" id="header">
  <div class="header__inner">
    <h1 class="header__title header-title">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoNew.png" alt="logo">
      </a>
    </h1>
    <nav class="header__nav nav" id="js-nav">
      <ul class="nav__items nav-items">
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>">Home</a></li>
        <li class="nav-items__item__active">Works</li>
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>#services">Services</a></li>
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>#profile">Profile</a></li>
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>#contact">Contact</a></li>
        <li class=" nav-items__item"><a href="<?php echo home_url(); ?>/index-jp">日本語</a></li>
    </nav>
    <button class="header__hamburger hamburger" id="js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!--------------------- works detail --------------------->

<div id="fv"></div>
<div id="works-sub"></div>
<section class="works-sub">
  <div class="inner">
    <h2 class="section-title">
      Works
    </h2>
    <div class="work-item" id="work1">
      <a href="https://mayumi-sakaguchi-dev.com/ai-trans-academy" target="_blank">
        <p class="text-title">AI-Trans Academy</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work1-detail.png" alt="AI-Trans Academy">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work1-detail_sp.png" alt="AI-Trans Academy">
        </div>
      </a>
      <div class="description">
        <span class="text">Work type:</span>
        <span class="text-sub">Landing Page creation</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub"><a href="https://mayumi-sakaguchi-dev.com/ai-trans-academy" target="_blank">https://mayumi-sakaguchi-dev.com/ai-trans-academy</a></span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2024/01-02(2 months)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Planning, direction, writing, design, coding (HTML, Sass, JavaScript, jQuery), WordPress theme development (PHP)</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Adobe XD, Photoshop, Illustrator, VSCode, WordPress</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">To create a Landing Page that links from Social Media ad to acquire new customers.</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">Japanese of all generations having strong interest in translation and AI.</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          - Created a different design for each section while keeping the base color and tone consistent, in order to bring sharpness to the design and story.<br>
          - The design allows for a natural flow of interest (maybe this product is for me!) → Understanding (I see how it works!) → Satisfaction (I can look forward to it, it seems reliable!)
          <br>
          - Familiar and easy-to-read font type (Gothic style). <br>
          - Used large fonts that are easy to read for a wide range of age groups.
          <br>
          - Used combination of soft and bright green and pink colors, that is easy to catch the eye of all generations and genders.
          <br>
          - Selected images that look more realistic than beautifully processed ones. <br>
          - Inserted instructor's pictures with various facial expressions for each section, in order to create a feeling that she is always there for you in any situation.
          <br>
          Etc.
          <br>
          *For more detail, please see <b><a href="https://drive.google.com/file/d/1fPKcQuDo0wVvAIHTfTNvK8nvO1-xK8T2/view?usp=sharing" target="_blank">AI-Trans Academy -presentation-</a></b> <span class="remark">*Japanese only</span></span>
        <p class="remark">*This course is a fictitious one created as a school assignment and does not actually exist.</p>
      </div>
    </div>

    <div class="work-item" id="work2">
      <a href="https://mayumi-sakaguchi-dev.com/portfolio" target="_blank">
        <p class="text-title">My portfolio site</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work2-detail.png" alt="Mayumi Sakaguchi -Portfolio-">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work2-detail_sp.png" alt="Mayumi Sakaguchi -Portfolio-">
        </div>
      </a>
      <div class="description">
        <span class="text">Work type:</span>
        <span class="text-sub">Website creation</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub"><a href="https://mayumi-sakaguchi-dev.com/portfolio" target="_blank">https://mayumi-sakaguchi-dev.com/portfolio</a></span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2024/02-03(1-2 weeks)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Planning, writing, translation, design, coding, WordPress development</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Figma, Photoshop, Illustrator, VSCode, WordPress</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">Create my own portfolio site to showcase my major creative works.</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">All people in the world, recruiters in particular.</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          - Created the site in English so that it can be viewed by all people in the world. (Japanese pages are also under preparation)<br>
          - Tried to create well summarized and easy-to-understand contents for everyone.<br>
          - Used earth color (brown) to represent energy and persistence, and yellowish colors to represent sunrise and flowers of hope.<br>
          Etc.</span>
      </div>
    </div>

    <div class="work-item" id="work3">
      <a href="https://mayumi-sakaguchi-dev.com/work3_org.png" target="_blank">
        <p class="text-title">AD FREAKS</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work3-detail.png" alt="AD FREAKS">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work3-detail_sp.png" alt="AD FREAKS">
        </div>
      </a>
      <div class=" description">
        <span class="text">Work type:</span>
        <span class="text-sub">Landing page design</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub">None</span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2023/07(2 weeks)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Design</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Adobe XD, Photoshop, Illustrator</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">To create a Landing page that links from Social Media ad to increase new customers.</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">Japanese men in their late 20s to 40s working for Web production companies.</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          -Blue based design to catch an eye of young men, and to represent professionalism and sincerity.<br>
          -Tried to appeal professionalism since the target audience should know the industry well.
          <br>
          Etc.
          <br>
          <p class="remark">*This service a fictitious one created as a school assignment.</p>
        </span>
      </div>
    </div>

    <div class="work-item" id="work5">
      <a href="https://mayumi-sakaguchi-dev.com/work5_org.jpg" target="_blank">
        <p class="text-title">Japanese style dining bar menu</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work5.png" alt="Japanese style dining bar menu">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work5-2.png" alt="Japanese style dining bar menu2">
        </div>
      </a>
      <div class="description">
        <span class="text">Work type:</span>
        <span class="text-sub">Graphic design</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub">None</span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2024/04 (3 days)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Design</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Photoshop</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">To create a menu for a sophisticated Japanese style dining bar, while expressing the beauty of Japanese culture and cuisine.</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">Japanese and non-Japanese clients above 18 years old who want to enjoy drinking and eating Japanese dishes at a relaxed Japanese style dining bar.</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          -Orange based design to express warm and relaxed atmosphere and to highlight food photos.<br>
          -Created the menu only in Japanese to keep Japanese atmosphere, while providing a photo for each food to help non-Japanese clients choose their foods.<br>
          Etc.
          <br>
          <p class="remark">*This dining bar menu is a fictitious one created as a school assignment and does not actually exist.</p>
        </span>
      </div>
    </div>

    <div class="work-item" id="work7">
      <a href="https://mayumi-sakaguchi-dev.com/work7_org.jpg" target="_blank">
        <p class="text-title">Ad for Japanese style dining bar</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work7.png" alt="AD for Japanese style dining bar">
        </div>
      </a>
      <div class="description">
        <span class="text">Work type:</span>
        <span class="text-sub">Social media ad</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub">None</span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2024/05 (1.5 days)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Copy writing, design</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Photoshop</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">To create an ad for a sophisticated Japanese style dining bar (for which I had designed a menu) for its opening, emphasizing its attractive points, to invite people (especially local people who might become repeaters) to come.</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">Tama-city citizens above 18 years old who want to enjoy drinking and eating in a relatively calm and relaxed Japanese atmosphere similar to a luxury hotel or Japanese restaurant, ever increasing non-Japanese tourists who loves Japanese culture, and mothers with kids (lunch time).</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          -Renovation of a Japanese traditional house into a Japanese style dining bar, while preserving the atmosphere of the good old days of Japan (Showa era).<br>
          -Modest and sophisticated design to express beauty of Japanese culture.<br>
          -Tried to create an atmosphere where people can relieve their fatigue and forget about stressful daily life, and to provide a place for people without enough time and money a moment as if they are travelling far.<br>
          -To offer exquisite cuisine prepared by a former 5-star hotel chef at affordable prices<br>
          -Commitment to pesticide-free and additive-free ingredients carefully selected by the chef himself<br>
          -All items are half price for 5 days after its openings<br>
          Etc.
          <br>
          <p class="remark">*This dining bar is a fictitious one created as a school assignment and does not actually exist.</p>
        </span>
      </div>
    </div>

    <div class="work-item" id="work9">
      <a href="https://mayumi-sakaguchi-dev.com/work9_org.jpg" target="_blank">
        <p class="text-title">Ad for Rose Garden shop</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work9.png" alt="Ad for Rose Garden shop">
        </div>
      </a>
      <div class="description">
        <span class="text">Work type:</span>
        <span class="text-sub">Social media ad</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub">None</span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2024/12 (1.5 days)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Copy writing, design</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Photoshop</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">To create an ad for a sophisticated Japanese style dining bar (for which I had designed a menu) for its opening, emphasizing its attractive points, to invite people (especially local people who might become repeaters) to come.</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">Japanese women in their 40s and 50s who value the beauty of nature and quality time and want ot enjoy special healing and relaxation time.</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          -Tried Generated an image (with the help of AI) illustrating the benefit that customers can obtain by purchasing these products.<br>
          -Tried to generate an image that can immediately communicate the best part of Rose Garden (a special space that offers natural beauty and high quality).<br>
          Etc.
          <br>
          <p class="remark">*This company and product are fictitious and created as a school assignment, and do not actually exist.</p>
        </span>
      </div>
    </div>

    <div class="work-item" id="work8">
      <a href="https://mayumi-sakaguchi-dev.com/work8_org.jpg" target="_blank">
        <p class="text-title">Roadmap to earn US dollars while living in Japan</p>
        <div class="work-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work8.png" alt="Video thumbnail">
        </div>
      </a>
      <div class="description">
        <span class="text">Work type:</span>
        <span class="text-sub">Video thumbnail</span>
      </div>
      <div class="description">
        <span class="text">URL:</span>
        <span class="text-sub">None</span>
      </div>
      <div class="description">
        <span class="text">Production period:</span>
        <span class="text-sub">2024/05 (1.5 days)</span>
      </div>
      <div class="description">
        <span class="text">Role:</span>
        <span class="text-sub">Copy writing, design</span>
      </div>
      <div class="description">
        <span class="text">Tools:</span>
        <span class="text-sub">Photoshop</span>
      </div>
      <div class="description">
        <span class="text">Goal:</span>
        <span class="text-sub">Created an attractive video thumbnail to attract as many YouTube viewers in Japan as possible (for a video provide by a design school),</span>
      </div>
      <div class="description">
        <span class="text">Target:</span>
        <span class="text-sub">Japanese people from a wide range of generations who are interested in getting rich by earning US dollars while living in Japan.</span>
      </div>
      <div class="description">
        <span class="text">Approach:</span>
        <span class="text-sub">
          <br>
          -Tried to pick up key messages and create attractive copy by repeatedly watching the video provided by a design school.<br>
          -Tried to effectively make use of limited space to communicate key messages while considering display environment (e.g. invisible area once it's uploaded).<br>
          -Tried to use illustration images that can effectively transmit key subject at the first sight.<br>
          Etc.
          <br>
          <p class="remark">*This service is a fictitious one created as a school assignment and does not actually exist.</p>
        </span>
      </div>
    </div>

</section>

<?php get_footer(); ?>