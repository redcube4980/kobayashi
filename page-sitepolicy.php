<?php
/*
Template Name: page-sitepolicy
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main_content" class="sitepolicy-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>SITE POLICY</h2>
        </div>
        <div class="page-title-right">
          <p class="page-title-text-1">当サイトのご利用については</p>
          <p class="page-title-text-2">こちらをご覧ください。</p>
        </div>
      </div>
		<div class="img-box">
      <img class="main-image" alt="サイトポリシー" src="<?=get_template_directory_uri()?>/images/privacy-policy-banner.jpg"></div>
      <div class="page-title-bottom">サイトポリシー</div>
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
    <p>Copyright © 2018　KOBAYASHI ENTERPRISE INCORPORATED. </p>
  </div>
</div>
<!-- main -->

<?php get_footer(); ?>

