<?php
/*
Template Name: page-sitemap
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main_content" class="sitemap-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>SITE MAP</h2>
        </div>
        <div class="page-title-right">
          <p>当サイトのご案内については</p>
          <p>こちらよりご確認ください。</p>
        </div>
      </div>
	 <div class="img-box">
      <img class="main-image" alt="サイトマップ" src="<?=get_template_directory_uri()?>/images/sitemap-bg.jpg">
      <div class="page-title-bottom">サイトマップ</div></div>
  	</div>
  	<div class="main-content">
  		<div class="cate-sitemap">
	        <h3><a href="http://kobayashi.cube-stg.com/service">>> <span>サービス</span></a></h3>
	        <ul>
	          <li><a href="http://kobayashi.cube-stg.com/service/haken/">■労働者派遣事業に関わる情報</a></li>
	        </ul>
	    </div>
	    <div class="cate-sitemap">
	        <h3><a href="http://kobayashi.cube-stg.com/about/">>> <span>会社概要</span></a></h3>
	    </div>
      	<div class="cate-sitemap">
        	<h3><a href="http://kobayashi.cube-stg.com/base/">>> <span>拠点案内</span></a></h3>
      	</div>
      	<div class="cate-sitemap">
        	<h3><a href="http://kobayashi.cube-stg.com/recruit/">>> <span>採用情報</span></a></h3>
        	<!-- <ul>
          		<li><a href="#">■正社員</a>　<a href="#">■正社員募集要項</a>　<a href="#">■パート・アルバイト</a></li>
        	</ul> -->
      	</div>
      	<div class="cate-sitemap">
        	<h3><a href="http://kobayashi.cube-stg.com/contact/">>> <span>お問い合わせ</span></a></h3>
      	</div>
      	<div class="cate-sitemap">
        	<h3><a href="http://kobayashi.cube-stg.com/sitemap/">>> <span>サイトマップ</span></a></h3>
      	</div>
      	<div class="cate-sitemap">
        	<h3><a href="http://kobayashi.cube-stg.com/sitepolicy/">>> <span>サイトポリシー</span></h3>
      	</div>
      	<div class="cate-sitemap">
        	<h3><a href="http://kobayashi.cube-stg.com/privacypolicy/">>> <span>プライバシーポリシー</span></h3>
      	</div>
        
  	</div>
  	<div class="footer-page">
        <a href="#" class="backtotop">ページTOPに戻る</a>
        <div class="clearfix"></div>
    </div>
    <div class="copy-right">
      <p>Copyright © 2020　KOBAYASHI ENTERPRISE INCORPORATED. </p>
    </div>
	<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</div>
<!-- 投稿が無い場合の処理 -->

<?php get_footer(); ?>

