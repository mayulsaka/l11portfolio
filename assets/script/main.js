// ハンバーガーメニュー

const ham = $('#js-hamburger');
const nav = $('#js-nav');

ham.on('click', function () {
    ham.toggleClass('active');
    nav.toggleClass('active');
});
$(window).on('resize', function () {
    ham.removeClass('active');
    nav.removeClass('active');
});

// スライダー

const swiper = new Swiper(".swiper", {
    loop: true,
    autoplay: true,
    speed: 1000,
    autoHeight: true,
    disableOnInteraction: false,
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 20,
    breakpoints: {
        768: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 20,
        }
    }
});

// TOPへ戻るボタン

$(document).ready(function () {
    const backToTopButton = $('#back-to-top');
    const scrollThreshold = 500;
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > scrollThreshold) {
            backToTopButton.addClass('show');
        } else {
            backToTopButton.removeClass('show');
        }
    });
    backToTopButton.on('click', function () {
        $('html, body').animate({ scrollTop: 0 });
    });
});

// ページナビゲーション

