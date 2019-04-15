$(document).ready(function() {
    const images = ['background-1.jpg', 'background-2.jpg', 'background-3.jpg'];
    const imageDir = window.location.pathname + "wp-content/themes/gabaritando/assets/images/background/";
    let click = 0;

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

    $('.control').click(function() {
        let currentSlide = $('.swiper-slide-active  .control').data('current-slide');

        if(isMobileDevice() == true){
            changeBg(currentSlide);
        }
    });

    function changeBg(i) {
        $('.main-header').css({
            'background-image': 'url(' + imageDir + images[i] + ')',
        });
    }

    $(window).scroll(function(){
        if($(this).scrollTop()>170){
            $('.menu-mobile').addClass('fix');
        }
        else{
            $('.menu-mobile').removeClass('fix');

        }
    });

    $('.burger').click(function(){
        $('.master-content-menu-mobile').toggleClass('mobile-open');

        if($('.master-content-menu-mobile').hasClass('mobile-open')){
            $('html,body').css('overflow','hidden');
            $('.overlay').addClass('active');

            $('.burger').addClass('transform');
        }
        else{
            $('html,body').css('overflow-y','scroll');
            $('.burger').removeClass('transform');
            $('.overlay').removeClass('active');
        }
    });
});