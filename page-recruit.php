<?php
/*
Template Name: page-recruit
*/
?>
<?php get_header();?>
<!-- main -->
<div id="main_content" class="recruit-page">
	<div class="page-title">
    <div class="page-title-inner">
      <div class="page-title-left">
        <h2>RECRUIT</h2>
      </div>
      <div class="page-title-right">
        <p class="page-title-text-1">パート・アルバイト・未経験も大歓迎！</p>
        <p class="page-title-text-2">物流の世界で一緒に働いてみませんか？</p>
      </div>
    </div>
    <img class="main-image" alt="採用情報" src="<?=get_template_directory_uri()?>/images/recruit-policy-banner.jpg">
    <div class="page-title-bottom">採用情報</div>
	</div>
	<div class="main-content">
    <div class="recruit-top">
      <p class="text-1">現在パート・アルバイトを募集をしています。</p>
      <p class="text-2">実務を積んだ方には、社員雇用のチャンスも！</p>
      <p class="text-3">コツコツ作業が好きな方、未経験者大歓迎です。</p>
      <p class="text-4">友達同士でのご応募も可能です。</p>
    </div>
    <div class="recruit-top-2">
      <div class="recruit-infomation-left">
        <h4>未経験でも安心！</h4>
        <p>どの作業でも、工程や注意点などがしっかりとマニュアル化されているので、未経験でも安心して効率的に作業を進められます。また社員によるフォロー体制も整っているので、分からないことがあれば気軽に相談できます。</p>
      </div>
      <div class="recruit-infomation-right">
        <h4>自分のペースで働ける！</h4>
        <p>シフト制で勤務時間も選べるので、プライベートを優先したり、それぞれ自分に合ったペースで働くことができます。</p>
      </div>
    </div>
    <div id="recruit-1" class="recruit-block">
      <div class="left">
        <p>勤務地を選ぶ</p>
        <span>ご希望の勤務地をお選びください。</span>
      </div>
      <div class="right">
        <input type="checkbox" id="tokyo" name="local" value="tokyo">
        <label class="tokyo_label" for="東京">東京</label>
        <input type="checkbox" id="kanagawa" name="local" value="kanagawa">
        <label class="kanagawa_label" for="神奈川">神奈川</label>
      </div>
    </div>
    <div id="recruit-2" style="display: none;" class="recruit-block">
      <div class="left">
        <p>募集職種</p>
        <span>ご希望の職種をお選びください。</span>
      </div>
      <div class="right">
        <input type="checkbox" id="warehouse" name="position" value="warehouse">
        <label class="warehouse_label" for="庫内作業">庫内作業</label>
        <input type="checkbox" id="maneuver" name="local" value="maneuver">
        <label class="maneuver_label" for="フォーク操縦">フォーク操縦</label>
      </div>
    </div>
    <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
		<div class="contact-top">
			<p class="text1">メールからご応募の方は必要事項を入力し、<br><span>「入力内容を確認する」ボタンを押してください。</span><br>※お電話からのご応募は一番下をご覧ください。</p>
		  <p class="text2"><i>★</i>は必須項目です。</p>
		</div>
		<?=do_shortcode('[contact-form-7 id="59" title="recruit"]')?>
	</div>
	<?php if(wp_is_mobile()) { ?>
		<div class="tel">
			<p>電話でのご応募はこちら</p>
			<a href="tel:0456250441"><img src="<?=get_template_directory_uri()?>/images/phone-icon.png">045-625-0441</a>
		</div>
	<?php }else { ?>
		<div class="tel">
			<p>電話でのご応募はこちら</p>
			<span><img src="<?=get_template_directory_uri()?>/images/phone-icon.png">045-625-0441</span>
		</div>
	<?php } ?>
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

