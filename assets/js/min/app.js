$(window).ready(function(){new Swiper(".swiper_banner",{direction:"horizontal",loop:!0,navigation:{nextEl:".control.left.banner",prevEl:".control.right.banner"},sliderDrag:!1}),new Swiper(".swiper-panel",{pagination:{el:".swiper-pagination-panel"}}),swiper_reviews=new Swiper(".swiper-review",{pagination:{el:".swiper-pagination-review"}}),swiper_plan=new Swiper(".swiper-container-ticket",{pagination:{el:".swiper-pagination-ticket"}}),new Swiper(".swiper-news",{pagination:{el:".swiper-pagination-news"}}),$(".burger").click(function(){$(".master-content-menu-mobile").toggleClass("mobile-open"),$(".master-content-menu-mobile").hasClass("mobile-open")?($("html,body").addClass("lock-overlay"),$(".overlay").addClass("active"),$(".burger").addClass("transform")):($("html,body").removeClass("lock-overlay"),$(".burger").removeClass("transform"),$(".overlay").removeClass("active"))}),$(".nav-link").click(function(){switch($(this).text()){case"Diferenciais":e($(".first-section"));break;case"Depoimentos":e($(".reviews"));break;case"Professores":e($(".ourTeachers"));break;case"Blog":e($(".ourNews"));break;case"Contato":e($(".reviews"));break;default:$(".reviews"),e("")}function e(e){$([document.documentElement,document.body]).animate({scrollTop:e.offset().top},2e3)}console.log()})});