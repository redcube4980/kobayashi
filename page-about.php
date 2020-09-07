<?php
/*
Template Name: page-about
*/
?>
<?php get_header();?>
<?php 
  $aAbout2 = array(
    '１９８４年２月'   => '横浜市西区伊勢町に設立',
    '１９８４年７月'   => '港湾運送関連事業許可取得',
    '１９９３年６月'   => '横浜市西区戸部町に本社移転',
    '１９９６年８月'   => '倉庫業許可取得',
    '２０００年１２月' => '貨物利用運送事業許可取得',
    '２００７年１月'   => '一般労働者派遣事業許可取得',
    '２００８年５月'   => '横浜市中区新山下に横浜支店を開設',
    '２０１５年１月'      => '新社長就任、新体制の開始'
  );
?>
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
      <img class="main-image" alt="会社概要" src="<?=get_template_directory_uri()?>/images/about-banner.jpg">
      <div class="page-title-bottom">会社概要</div>
  </div>
  <div class="main-content">
    <div class="about-infomation">
      <div class="about-infomation-left">
        <img src="<?=get_template_directory_uri()?>/images/about-image.jpg" alt="代表取締役　小林義和 ">
      </div>
      <div class="about-infomation-right">
        <p class="first"><span>1984 年 2 月、港湾関連物流事業を主たる業務とし横浜市で設立以来、今日ま</span>で日本経済の発展と共に順調に推移して参りました。現在は、港湾関連物流事業を核とし、一般倉庫業並びに人材派遣業を経営の柱として、業界内に確固たる地位を築きつつあります。これは一重に長年に亘る皆様方のご支援の賜と深く感謝いたしております。</p>
        <p><span>激動する世界経済、社会環境のなかで、ますます多様化する物流変革に迅速</span>かつ柔軟に対応するため、効率化とカスタマーサービスの向上によりお客様のトータルコスト低減に貢献しております。</p>
      　<p><span>時代の変革に即応するため、経営の合理化と設備の充実･社員教育に重点を置</span>き、皆様から愛される企業として、お客様のニーズにお応えして参ります。</p>
        <p class="text-right last">代表取締役　小林義和</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <ul class="about-item-block type1 have-border">
      <li class="row-item row-1">
        <div class="row-item-left">
          <p>商号</p>
        </div>
        <div class="row-item-right">
          <p>株式会社<span>コバヤシ・エンタープライズ</span> （KOBAYASHI ENTERPRISE INCORPORATED）</p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-2">
        <div class="row-item-left">
          <p>代表取締役</p>
        </div>
        <div class="row-item-right">
          <p>小林義和</p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-3">
        <div class="row-item-left">
          <p>資本金</p>
        </div>
        <div class="row-item-right">
          <p>3,000 万円 </p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-4">
        <div class="row-item-left">
          <p>年商</p>
        </div>
        <div class="row-item-right">
          <p>30 億円 </p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-5">
        <div class="row-item-left">
          <p>従業員数</p>
        </div>
        <div class="row-item-right">
          <p>300 名</p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-6">
        <div class="row-item-left">
          <p>営業種目</p>
        </div>
        <div class="row-item-right">
          <p>港湾運送関連事業</p><p>営業倉庫業</p><p>労働者派遣事業</p><p>貨物利用運送事業</p><p>食品等輸出入貨物の検品、<br class="sm">ピッキング、梱包事業</p><p>不動産の賃貸、仲介、管理</p><p>前各号に附帯する一切の業務</p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-7">
        <div class="row-item-left">
          <p>所属団体</p>
        </div>
        <div class="row-item-right">
          <p>横浜港運協会</p><p>神奈川倉庫協会</p><p>一般社団法人 横浜港湾福利厚生協会</p><p>一般社団法人 横浜港振興協会</p><p>一般社団法人 日本港運協会</p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-8">
        <div class="row-item-left">
          <p>本社</p>
        </div>
        <div class="row-item-right">
          <p>
            <span class="tel">〒220-0042 <br class="sm">神奈川県横浜市西区戸部町1-10</span>
            <a class="map" href="https://www.google.co.jp/maps/place/%E3%80%92220-0042+%E7%A5%9E%E5%A5%88%E5%B7%9D%E7%9C%8C%E6%A8%AA%E6%B5%9C%E5%B8%82%E8%A5%BF%E5%8C%BA%E6%88%B8%E9%83%A8%E7%94%BA%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%90/@35.4507158,139.6229182,17z/data=!3m1!4b1!4m5!3m4!1s0x60185c66a8cd7bdf:0xe887ae5f51afa481!8m2!3d35.4507158!4d139.6251069?hl=ja" target="_blank"><img class="local-icon" src="<?=get_template_directory_uri()?>/images/local-icon.png"><i>MAP</i></a>
          </p>
          <!-- <p>
            <span class="tel">TEL 045-242-3380　<br class="sm">FAX 045-241-3796</span>
          </p> -->
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-9">
        <div class="row-item-left">
          <p>横浜支店</p>
        </div>
        <div class="row-item-right">
          <p>
            <span class="tel">〒231-0801 <br class="sm">神奈川県横浜市中区新山下3-9-1</span>
            <a class="map" href="https://www.google.co.jp/maps/place/%E3%80%92231-0801+%E7%A5%9E%E5%A5%88%E5%B7%9D%E7%9C%8C%E6%A8%AA%E6%B5%9C%E5%B8%82%E4%B8%AD%E5%8C%BA%E6%96%B0%E5%B1%B1%E4%B8%8B%EF%BC%93%E4%B8%81%E7%9B%AE%EF%BC%99%E2%88%92%EF%BC%91/@35.4396766,139.6627438,17z/data=!3m1!4b1!4m5!3m4!1s0x60185d3c1704d983:0x8ea8fd98ff046f6f!8m2!3d35.4396766!4d139.6649325?hl=ja" target="_blank"><img class="local-icon" src="<?=get_template_directory_uri()?>/images/local-icon.png"><i>MAP</i></a>
          </p>
          <!-- <p>
            <span class="tel">TEL 045-625-0441　<br class="sm">FAX 045-625-0442</span>
          </p> -->
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-10">
        <div class="row-item-left">
          <p>主要取引先<span>（アイウエオ順）</span></p>
        </div>
        <div class="row-item-right">
          <p>インターナショナルエクスプレス（株）／宇徳運輸（株）／（株）上組／</p><p><span class="havesp">（株）近鉄エクスプレス／山九（株）／澁澤倉庫（株）／（株）住友倉庫／</span></p><p>第一船舶企業（株）／（株）ダイワコーポレーション／（株）日新／</p><p><span class="havesp">（株）バンテック／丸全昭和運輸（株）／三井物産グローバルロジスティクス（株）／</span></p><p><span class="havesp">（株）ヤマタネ／横浜新港倉庫（株）／（株）若洲</span></p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li class="row-item row-11">
        <div class="row-item-left">
          <p>HP</p>
        </div>
        <div class="row-item-right">
          <p>https://www.kobayashi-e.co.jp</p>
        </div>
        <div class="clearfix"></div>
      </li>
    </ul>
    <div class="about-detail-title">
      <h3>沿革</h3>
    </div>
    <ul class="about-item-block type2 have-border">
      <?php foreach ($aAbout2 as $sKey => $SVal) { ?>
        <li class="row-item no-border">
          <div class="row-item-left">
            <p><?=$sKey?></p>
          </div>
          <div class="row-item-right">
            <?php 
              if(gettype($SVal) == 'array') {
                foreach ($SVal as $sText) {
                  echo '<p>'.$sText.'</p>';
                }
              }else {
                echo '<p>'.$SVal.'</p>';
              } 
            ?>
          </div>
          <div class="clearfix"></div>
        </li>
      <?php } ?>
    </ul>
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

