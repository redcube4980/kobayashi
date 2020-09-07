<?php
/*
Template Name: page-contact-thanks
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main_content" class="contact-page-thanks">
	<div class="page-title">
      <div class="page-title-inner">
        <div class="page-title-left">
          <h2>CONTACT</h2>
        </div>
        <div class="page-title-right">
          <p class="page-title-text-1">お仕事依頼から採用に関することまで、</p>
          <p class="page-title-text-2">なんでもお気軽にお問い合わせください。</p>
        </div>
      </div>
      <img class="main-image" alt="お問い合わせ" src="<?=get_template_directory_uri()?>/images/privacy-policy-banner.jpg">
      <div class="page-title-bottom">お問い合わせ</div>
  	</div>
  	<div class="main-content">
  		<h4>お問い合わせ完了</h4>
      <p>お問い合わせありがとうございます。</p>
      <p>入力いただいたメールアドレスに受付完了メールを自動送信しております。</p>
      <p>受付完了メールが届かなかった場合、原因として以下の可能性が考えられます。</p>
      <p>１）迷惑メールフォルダに振り分けられている</p>
      <p>２）入力いただいたメールアドレスが間違っている</p>
      <p>３）お客様の受信拒否設定</p>
      <p>問題が解決しない場合は、大変お手数ですが、</p>
      <p>再度フォームご入力、またはお電話でお問い合わせください。</p>
  	</div>
    <div class="footer-page">
        <a href="#" class="backtotop">ページTOPに戻る</a>
        <div class="clearfix"></div>
    </div>
    <div class="copy-right">
      <p>Copyright © 2018　KOBAYASHI ENTERPRISE INCORPORATED. </p>
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

