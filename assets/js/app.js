$(window).ready(function() {
    var swiper_banner,
        swiper_panel,
        swiper_news,
        swiper_plans;

    swiper_banner = new Swiper('.swiper_banner', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.control.left.banner',
            prevEl: '.control.right.banner',
        },
        sliderDrag: false
    });


    swiper_panel = new Swiper('.swiper-panel', {
        pagination: {
            el: '.swiper-pagination-panel',
        }
    });

    swiper_reviews = new Swiper('.swiper-review', {
        pagination: {
            el: '.swiper-pagination-review',
        }
    });

    swiper_plan = new Swiper('.swiper-container-ticket', {
        pagination: {
            el: '.swiper-pagination-ticket',
        }
    })

    swiper_news = new Swiper('.swiper-news', {
        pagination: {
            el: '.swiper-pagination-news',
        }
    })


    // Burger
    $('.burger').click(function() {
        $('.master-content-menu-mobile').toggleClass('mobile-open');

        if ($('.master-content-menu-mobile').hasClass('mobile-open')) {
            $('html,body').addClass('lock-overlay');
            $('.overlay').addClass('active');

            $('.burger').addClass('transform');
        } else {
            $('html,body').removeClass('lock-overlay');
            $('.burger').removeClass('transform');
            $('.overlay').removeClass('active');
        }
    });




    // Smoothly
    $(".nav-link").click(function() {
        let section='';

        switch ($(this).text()) {
            case 'Diferenciais':
                
            break;
            case 'Depoimentos':
            
            break;
            case 'Professores':
            
            break;
            case 'Blog':
            
            break;
            case 'Contato':

            break;
            default:
               
                break;
        }


        function smooth(x){
            $([document.documentElement, document.body]).animate({
          scrollTop: x.offset().top
         }, 2000);
        }
        console.log();
    });

});