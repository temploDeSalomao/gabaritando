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
			sliderDrag:false
        });
    });

swiper_panel = new Swiper('.swiper-panel', {
	 pagination: {
        el: '.swiper-pagination-panel',
      }
});

swiper_reviews = new Swiper('.swiper-review',{
	 pagination: {
        el: '.swiper-pagination-review',
      }
});

swiper_plan = new Swiper('.swiper-container-ticket',{
		 pagination: {
        el: '.swiper-pagination-ticket',
      }
})

swiper_news = new Swiper('.swiper-news',{
		 pagination: {
        el: '.swiper-pagination-news',
      }
})




