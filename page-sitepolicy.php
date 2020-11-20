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
    <div class="sitepolicy-page-title">
      <h3>サイトのご利用について</h3>
    </div>
    <div class="main-content-text">
      <div class="block-text-1">
        <h4>1. 利用条件への同意</h4> 
        <p>このウェブサイトを利用される前に以下のご利用条件をお読みいただき、これらの条件にご同意された場合のみご利用ください。</p>
      </div>
      <div class="block-text-2">
        <h4>2. 免責事項について</h4>
        <p>当ウェブサイトに情報を掲載する際には細心の注意を払っておりますが、掲載された情報について正確であること、最新であることを保証するものではなく、情報の誤りやデータのダウンロード、第三者によるデータの改竄等によって生じた障害等に関しまして、当社は一切責任を負うものではありません。当社は、リンクを通じてアクセスされる当ウェブサイトについて、いかなる責任も負いません。当ウェブサイトの内容は予告なしに変更、または削除する場合もありますので、予めご了承ください。</p>
      </div>
      <div class="block-text-3">
        <h4>3. 禁止行為について</h4>
        <p>当社のウェブサイトをご利用されるにあたり、お客様の次の行為を禁止します。<p>
        <ul>
          <li>・第三者もしくは当社の財産もしくはプライバシーを侵害する行為、または侵害する恐れのある行為</li>
          <li>・第三者もしくは当社に不利益や損害を与える行為、又はその恐れのある行為</li>
          <li>・公序良俗に反する行為またはその恐れがある行為</li>
          <li>・犯罪行為もしくは犯罪行為に結びつく行為またはその恐れのある行為</li>
          <li>・他人の電子メールアドレスを登録するなど虚偽の申告、届出を行なう行為</li>
          <li>・営業行為もしくは営利を目的とする行為またはその準備を目的とする行為</li>
          <li>・第三者もしくは当社の名誉もしくは信用を毀損する行為</li>
          <li>・コンピューターウイルスなど有害なプログラムを使用もしくは提供する行為またはその恐れのある行為</li>
          <li>・その他、法律、法令もしくは条例に違反する行為またはそのおそれのある行為</li>
          <li>・その他、当社が不適切だと判断する行為</li>
        </ul>
      </div>
      <div class="block-text-4">
        <h4>4. リンクについて</h4>
        <p>当社ウェブサイトからまたは当社ウェブサイトにリンクを貼っている第三者のウェブサイトの内容については当社が推奨、保証するものではなく、第三者のウェブサイト利用によってウェブサイト閲覧者に生じたいかなる責任も負うものではありません。リンクに際しては、当社ロゴの使用を禁止します。</p>
      </div>
      <div class="block-text-5">
        <h4>5. 準拠法及び裁判管轄について</h4>
        <p>当社ウェブサイトのご利用並びに本ご利用条件の解釈及び適用は、別段の定めのない限り、日本国法に準拠するものとします。</p>
      </div>
      <div class="block-text-6">
        <h4>6. 著作権について</h4>
        <p>当ウェブサイト上に掲載している著作物(名称、ロゴ、マーク、イラスト、写真、文章など)の著作権は、原則として当社または当社関係会社が所有しています。許可なく、無断で使用、複製、改変することを禁じます。</p>
      </div>
      <div class="block-text-7">
        <h4>7. 知的財産権について</h4>
        <p>当ウェブサイトは、当社または第三者の特許権、商標権、著作権その他の知的財産権に基づくいかなる権利も許諾するものではありません。</p>
      </div>
    </div>
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

