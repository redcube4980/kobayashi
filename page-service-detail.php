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
    <div class="main-content">
	    <div class="service-detail-title">
        	<h3>株式会社コバヤシ・エンタープライズ　横浜支店(令和2年度)</h3>
      	</div>
      	<ul class="service-detail-block have-border">
        	<li class="service-detail-row clearfix">
          		<div class="service-detail-left">
            		<p>事業所名</p>
          		</div>
          		<div class="service-detail-right">
            		<p>横浜支店</p>
          		</div>
          		<div class="clearfix"></div>
       	 	</li>
	        <li class="service-detail-row clearfix">
	          <div class="service-detail-left">
	            <p>事業所の所在地</p>
	          </div>
	          <div class="service-detail-right">
	            <p>神奈川県横浜市中区新山下３－９－１</p>
	          </div>
	          <div class="clearfix"></div>
	        </li>
	    </ul>
      	<ul class="service-detail-block type2 have-border">
	        <li class="service-detail-row">
	          <div class="service-detail-left">
	            <p>派遣労働者の数 (１日平均)</p>
	          </div>
	          <div class="service-detail-right">
	            <p>３８ 人</p>
	          </div>
	          <div class="clearfix"></div>
	        </li>
	        <li class="service-detail-row">
	          <div class="service-detail-left">
	            <p>派遣先の実数 (事業年度あたりの事業所数)</p>
	          </div>
	          <div class="service-detail-right">
	            <p>７ 件</p>
	          </div>
	          <div class="clearfix"></div>
	        </li>
	    </ul>
	    <ul class="service-detail-block type3">
	        <li class="service-detail-row">
	          <div class="service-detail-left">
	            <p>①労働者派遣の料金 (１日８時間当たりの平均額)</p>
	          </div>
	          <div class="service-detail-right">
	            <p>１２,３６７ 円</p>
	          </div>
	          <div class="clearfix"></div>
	        </li>
	        <li class="service-detail-row">
	          <div class="service-detail-left">
	            <p>②派遣労働者の賃金 (１日８時間当たりの平均額)</p>
	          </div>
	          <div class="service-detail-right">
	            <p>９,３７３ 円</p>
	          </div>
	          <div class="clearfix"></div>
	        </li>
	        <li class="service-detail-row">
	          <div class="service-detail-left">
	            <p>マージン率※(①-②)÷①小数点第2位以下を四捨五入</p>
	          </div>
	          <div class="service-detail-right">
	            <p>２４.２％</p>
	          </div>
	          <div class="clearfix"></div>
	        </li>
	    </ul>
      	<div class="service-detail-table">
	        <h3>派遣労働者教育訓練に関する事項</h3>
	        <?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php echo get_field('content_table'); ?>
				<?php endwhile; ?>
			<?php endif; ?>
	        <!-- <table>
	        	<thead>
		          	<tr>
			            <th class="first">教育訓練の内容</th>
			            <th>実施人数</th>
			            <th>方法</th>
			            <th>賃金支給状況</th>
			            <th class="last">労働者の</br>費用負担の有無</th>
		          	</tr>
		          	<tr class="thead2">
			            <th class="first">教育訓練の内容</th>
			            <th>実施人数</th>
			            <th>方法</th>
			            <th>賃金支給状況</th>
			            <th class="last">労働者の</br>費用負担の有無</th>
		          	</tr>
		        </thead>
		        <tr>
		            <td class="title"><span class="line1">新規登録者への訓練</span><span class="line2">(ビジネスマナー安全衛生基礎研修)</span></td>
		            <td>12人</td>
		            <td>off-JT</td>
		            <td>無</td>
		            <td>無</td>
		        </tr>
		        <tr>
		            <td class="title no-bottom"><span class="line1">派遣前訓練</span><span class="line2">(ビジネスマナー安全衛生研修)</span></td>
		            <td class="no-bottom">4人</td>
		            <td class="no-bottom">OJT</td>
		            <td class="no-bottom">無</td>
		            <td class="no-bottom last">無</td>
		        </tr>
	        </table> -->
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
			<?php //the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</div>
<!-- main -->

<?php get_footer(); ?>

