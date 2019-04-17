$(document).ready(function() {
    const images = ['background-1.jpg', 'background-2.jpg', 'background-3.jpg'];
    const imageDir = window.location.pathname + "wp-content/themes/gabaritando/assets/images/background/";
    let click = 0;

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

    $('.control').click(function() {
        let currentSlide = $('.swiper-slide-active').data('swiper-slide-index');
        console.log(currentSlide);

        if(isMobileDevice() != true){
            console.log(0);
            changeBg(currentSlide);
        }
    });

    function changeBg(i) {
        $('.main-header').css({
            'background-image': 'url(' + imageDir + images[i] + ')',
        });
        console.log('entrei na função');
    }

    $(window).scroll(function(){
        if($(this).scrollTop()>170){
            $('.menu-mobile').addClass('fix');
        }
        else{
            $('.menu-mobile').removeClass('fix');

        }
    });


});