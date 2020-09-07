// JavaScript Document
jQuery(function($){
// この中であれば「$」使用可
// ここにjQueryのコードを書く
	$(function() {
    $('.navToggle').click(function() {
        $('header').toggleClass('active');
    });
});
$(function(){
    //.accordion1の中のp要素がクリックされたら
	$('.accordion1 p').click(function(){
 
		//クリックされた.accordion1の中のp要素に隣接するul要素が開いたり閉じたりする。
		$(this).next('ul').slideToggle();
 
	});
});
	$(window).scroll(function() {

    if ($(window).scrollTop() > 10) {
        $('header').addClass('sticky');
    } else {
        $('header').removeClass('sticky');
    }
});
});
//acordion
   $(function(){
    $('.ac2').click(function() {
        $('.ac2').toggleClass('on');
    });
});