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
      <img class="main-image" alt="拠点案内" src="<?=get_template_directory_uri()?>/images/base-banner.jpg">
      <div class="page-title-bottom">拠点案内</div>
  </div>
  <div class="main-content">
    <div class="image-base">
      <img alt="拠点案内" src="<?=get_template_directory_uri()?>/images/base-image.jpg">
    </div>
    <div class="image-base type2">
      <h3>本社</h3>
      <div class="img-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.16456329174!2d139.6229182148895!3d35.45072015018743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185c66a8cd7bdf%3A0xe887ae5f51afa481!2z44CSMjIwLTAwNDIg56We5aWI5bed55yM5qiq5rWc5biC6KW_5Yy65oi46YOo55S677yR5LiB55uu77yR77yQ!5e0!3m2!1sja!2sjp!4v1594103062243!5m2!1sja!2sjp" width="100%" height="340" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <!-- <img alt="本社" src="<?=get_template_directory_uri()?>/images/map2.png" class="featured-image"> -->
      </div>
      <p>〒２２０－００４２　<br class="sm">神奈川県横浜市西区戸部町１－１０</p>
      <p>ＴＥＬ ０４５ー２４２ー３３８０　<br class="sm">ＦＡＸ ０４５－２４１－３７９６</p>
    </div>
    <div class="image-base type3">
      <h3>横浜支店</h3>
      <div class="img-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.6103623852746!2d139.66274381488913!3d35.4396809507895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185d3c1704d983%3A0x8ea8fd98ff046f6f!2z44CSMjMxLTA4MDEg56We5aWI5bed55yM5qiq5rWc5biC5Lit5Yy65paw5bGx5LiL77yT5LiB55uu77yZ4oiS77yR!5e0!3m2!1sja!2sjp!4v1594103115784!5m2!1sja!2sjp" width="100%" height="340" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <!-- <img alt="横浜支店" src="<?=get_template_directory_uri()?>/images/map1.png" class="featured-image"> -->
      </div>
      <p>〒２３１－０８０１　<br class="sm">神奈川県横浜市中区新山下３－９－１</p>
      <p>ＴＥＬ ０４５ー６２５ー０４４１　<br class="sm">ＦＡＸ ０４５－６２５－０４４２</p>
    </div>
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
<!-- main-->

<?php get_footer(); ?>

