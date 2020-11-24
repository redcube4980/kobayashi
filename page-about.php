<?php
/*
Template Name: page-about
*/
?>
<?php get_header();?>
<!-- main-->
<div id="main_content" class="about-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>ABOUT</h2>
        </div>
        <div class="page-title-right">
          <p class="page-title-text-1">皆様から愛される企業として、</p>
          <p class="page-title-text-2">お客様のニーズにお答えして参ります。</p>
        </div>
      </div>
		<div class="img-box">
      <img class="main-image" alt="会社概要" src="<?=get_template_directory_uri()?>/images/about-banner.jpg"></div>
      <div class="page-title-bottom">会社概要</div>
  </div>
  <?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
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
<!-- main -->

<?php get_footer(); ?>

