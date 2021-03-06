<?php
/*
Template Name: page-sitemap
*/
?>
<?php get_header();?>
<main>
<div id="main_content" class="sitemap-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>INFORMATION</h2>
        </div>
      </div>
		<div class="img-box">
      <img class="main-image" alt="インフォメーション" src="<?=get_template_directory_uri()?>/images/sitemap-bg.jpg"></div>
      <div class="page-title-bottom">インフォメーション</div>
  	</div>
  	<div class="main-content">
  		<div class="cate-sitemap">
	        <h3>TOPICS</h3>
	        <ul>
	          <li>
				  <p>2020.10.01　ホームページをリニューアルしました。</p>
			  </li>
	        </ul>
	    </div>
  	</div>
  	<div class="footer-page">
        <a href="#" class="backtotop">ページTOPに戻る</a>
        <div class="clearfix"></div>
    </div>
    <div class="copy-right">
      <p>Copyright © 2020　KOBAYASHI ENTERPRISE INCORPORATED. </p>
    </div>
	</div>
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</main>
<?php get_footer(); ?>