<?php
/*
Template Name: page-contact
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main_content" class="contact-page">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>CONTACT</h2>
        </div>
        <div class="page-title-right">
          <p class="page-title-text-1">お仕事依頼からサービスに関するご相談まで、</p>
          <p class="page-title-text-2">なんでもお気軽にお問い合わせください。</p>
        </div>
      </div>
      <img class="main-image" alt="お問い合わせ" src="<?=get_template_directory_uri()?>/images/privacy-policy-banner.jpg">
      <div class="page-title-bottom">お問い合わせ</div>
  	</div>
  	<div class="main-content">
      <!-- <div class="contact-error">
        <h3>エラー</h3>
        <div class="content-error"></div>
      </div> -->
  		<div class="contact-top">
  			<p class="text1">お問い合わせ内容を入力し、<span>「入力内容を確認する」ボタンを押してください。</span></p>
			<p class="text2"><i>★</i>は必須項目です。</p>
  		</div>
  		<?=do_shortcode('[contact-form-7 id="55" title="Contact"]')?>
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
<!-- main -->

<?php get_footer(); ?>

