// Banner
var bannerOwl = $('#banner.owl-carousel');

bannerOwl.on("initialize.owl.carousel", () => {
    setTimeout(() => {
        $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
    }, 200);
});

bannerOwl.owlCarousel({
    loop: true,
    items: 1,
    responsiveClass: true,
    autoplay: true
})

bannerOwl.on("changed.owl.carousel", e => {
    $(".owl-slide-animated").removeClass("is-transitioned");
    const $currentOwlItem = $(".owl-item").eq(e.item.index);
    $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
});
// End banner
// Beauty product
var BeautyproductOwl = $('.beaty-product .owl-carousel');


BeautyproductOwl.owlCarousel({
    loop: true,
    items: 4,
    margin: 32,
    responsiveClass: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
// end Beauty product

// owl-text
var owltext = $('.otm.owl-carousel');
owltext.owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000,
    loop: true,
    items: 1
});
$(".content-sp .btn-left").click(function() {
    owltext.trigger('next.owl');
    // alert("ok ");
});
$(".content-sp .btn-right").click(function() {
    owltext.trigger('prev.owl');
});


// end owl-text

// Menu mobi 
$('.icon-bar').click(function() {
    $('.mobile-nav').addClass('mobile-nav-active');
    $('.icon-close').addClass('icon-close-active');
});
$('.icon-close').click(function() {
    $('.mobile-nav').removeClass('mobile-nav-active');
    $('.icon-close').removeClass('icon-close-active');
});
// End menu mobi
// Cart click 
$('.cart-icon').click(function(event) {
    $('.cart-hover').addClass('cart-hover-active');
    $('.box-cart-home').css("opacity", "1");
    $('.box-cart-home').css("z-index", "10");

});
$('.box-cart-home').click(function(e) {
    if (!document.getElementById('cart-hovers').contains(e.target)) {
        $('.cart-hover').removeClass('cart-hover-active');
        $('.box-cart-home').css("opacity", "0");
        $('.box-cart-home').css("z-index", "-10");
    }
});


// End Cart click
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});