<?php
/*
Template Name: page-service-detail
*/
?>
<?php get_header();?>
<!--main-->
<div id="main_content" class="service-detail-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>SERVICE</h2>
        </div>
        <div class="page-title-right">
          <p>多様化する物流変革に迅速に対応するため</p>
          <p>様々な物流付帯サービスを提供しています。</p>
        </div>
      </div>
		<div class="img-box">
      <img class="main-image" alt="労働者派遣事業に関わる情報" src="<?=get_template_directory_uri()?>/images/service-image.jpg">
      <div class="page-title-bottom">労働者派遣事業に関わる情報</div></div>
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
</div>
<!-- main -->

<?php get_footer(); ?>