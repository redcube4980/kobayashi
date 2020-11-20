<?php
/*
Template Name: single
*/
?>
<?php get_header();?>
<div id="main_content" class="archivepage">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>INFORMATION</h2>
        </div>
      </div>
	  <div class="img-box">
      <img class="main-image" alt="インフォメーション" src="<?=get_template_directory_uri()?>/images/sitemap-bg.jpg"></div>
      <div class="page-title-bottom"><?php the_title(); ?></div>
  	</div>
  	<div class="main-content">
  		<div class="cate-archive">
	        <h3>TOPICS</h3>
			<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<time><?php echo get_the_date(); ?></time>
			<?php the_title(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
				<?php else: ?>
				<!-- 投稿が無い場合の処理 -->
			<?php endif; ?>			  
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
</main>
<?php get_footer(); ?>