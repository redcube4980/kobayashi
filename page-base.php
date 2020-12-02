<?php
/*
Template Name: page-base
*/
?>
<?php get_header();?>
<!--  main -->
<div id="main_content" class="base-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>BASE</h2>
        </div>
        <div class="page-title-right">
          <p>横浜から環東京湾に広がるサービスネットワークを</p>
          <p>展開しています。</p>
        </div>
      </div>
		<div class="img-box">
      <img class="main-image" alt="拠点案内" src="<?=get_template_directory_uri()?>/images/base-banner.jpg"></div>
      <div class="page-title-bottom">拠点案内</div>
  </div>
  <?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
  <div class="footer-page">
      <a href="#" class="backtotop">ページTOPに戻る</a>
      <div class="clearfix"></div>
  </div>
  <div class="copy-right">
    <p>Copyright © 2020　KOBAYASHI ENTERPRISE INCORPORATED. </p>
  </div>
</div>
<!-- main-->
<?php get_footer(); ?>