// JavaScript Document
var worksswiper = new Swiper ('#swiper .swiper-container', {
	wrapperClass:'swiper-wrapper',
	slideClass:'swiper-slide',
	loop: true,
	autoplay: {
		delay:3000,
		stopONLast:false,
		disableOnInteraction:false,
	},
	speed: 3000,
	slidesPerView: 'auto',
	// slidesPerView: 1.2, // 何枚のスライドを表示するか
    spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'fade', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
	//
	freeModeMomentumBounce: false,
	initialslide:1,
	calculateHeight: true,
	centeredSlides : true,
	preloadImages: true, 
	//Enable lazy loading 
	lazy: { loadPrevNext: true,
		  	loadPrevNextAmount :1,
		   	loadOnTransitionStart: true,
		   	elementClass :'swiper-lazy' ,
		   	preloaderClass:'swiper-lazy-preloader' 
		  },
	breakpoints: {
    // when window width is <= 768px
    768: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is <= 960px
    960: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is <= 1400px
    1400: {
      slidesPerView: 1,
      spaceBetween: 0
    },
	// when window width is <= 1980px
    1980: {
      slidesPerView: 1,
      spaceBetween: 0
    },
  	},
    pagination: {
    el: '.swiper-pagination',　 // ページネーションを表示するセレクタ
	clickable: 'true',
	clickableClass: 'swiper-pagination-clickable',
    },
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
});
