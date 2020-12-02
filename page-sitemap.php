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
        <?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
  	</div>
  	<div class="footer-page">
        <a href="#" class="backtotop">ページTOPに戻る</a>
        <div class="clearfix"></div>
    </div>
    <div class="copy-right">
      <p>Copyright © 2020　KOBAYASHI ENTERPRISE INCORPORATED. </p>
    </div>
</div>
<!-- 投稿が無い場合の処理 -->
<?php get_footer(); ?>