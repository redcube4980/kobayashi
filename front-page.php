<?php
/*
Template Name: front-page
*/
?>
<?php get_header();?>
<!---------- main------->
<section id="swiper">
	<div class="main_vissual">
		<div class="swiper-info-container">
		<div class="swiper-container">
		<div class="swiper-wrapper">
		<div class="swiper-slide">
			<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/main_img.jpg" class="main_img" alt="" width="" height="" border="0" />
		</div>
		<div class="swiper-slide">
			<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/main_img2.jpg" class="main_img" alt="" width="" height="" border="0" />
		</div>
		<div class="swiper-slide">
			<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/main_img3.jpg" class="main_img" alt="" width="" height="" border="0" />
		</div>
		</div>
				<!--<div class="swiper-pagination"></div>
   				 <!-- If we need navigation buttons -->
 			  <!-- <div class="swiper-button-prev"></div>
 			   <div class="swiper-button-next"></div>-->
		</div>
			<div class="main_textsp"><h1>LOGISTICS SOLUTION YOKOHAMA</h1></div>
			<div class="main_text2sp"><h2>日々進化する物流システムを支える<br>物流付帯サービスならコバヤシまで</h2></div>
	</div>
	</div>	
</section>
<!-------contents-------->
		<div id="main_content">
						<div class="main_text"><h1>LOGISTICS SOLUTION YOKOHAMA</h1></div>
			<div class="main_text2"><h2>日々進化する物流システムを支える<br>物流付帯サービスならコバヤシまで</h2></div>
			<div id="copyright">Copyright © 2020　KOBAYASHI ENTERPRISE INCORPORATED. </div>
			<div id="topics">
				<?php
				$args = array(
					'posts_per_page' => 1 // 表示件数の指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
				?>
				<time><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></time> <span id="oshirase"> お知らせ </span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<div id="topics_r">一覧</div>
				<div id="topics_l"><p>TOPICS</p></div>
				<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
			</div>
			<div id="topics_title2">
					<div id="topics_rsp"><p>TOPICS</p></div>
					<div id="topics_lsp"><p>一覧</p></div>
				<?php
				$args = array(
					'posts_per_page' => 3 // 表示件数の指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
				?>
			<ul>
				<li><time><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></time> <span>お知らせ</span><br>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			</ul>
			<?php
  				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
			</div>
		</div>
	<p class="service_title">SERVICE</p>
		<section class="main1">
			<div class="main_content">
				<a href="<?php echo esc_url( home_url( 'service#section01' ) ); ?>"><img class="main1_img" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/topimage01.jpg" alt="" width="" height="" border="0" />
				<div class="main1_text"><h2>物流加工</h2>
					<h4>Logistics processing</h4>
					<p>より迅速で、効率化した<br>様々な庫内業務を追究しています。</p>
				</div>
				<div class="square_border"><div class="triangle"></div></div></a>	
			</div>
			<div class="main_content">
				<a href="<?php echo esc_url( home_url( 'service#section02' ) ); ?>"><img class="main1_img" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/topimage03.jpg" alt="" width="" height="" border="0" />
				<div class="main1_text"><h2>人材派遣</h2>
					<h4>Temporary staffing</h4>
					<p>日々多様化する物流要員のニーズに対応するために、<br>幅広い人材を派遣できる体制を確立しています。</p>
				</div>
				<div class="square_border"><div class="triangle"></div></div></a>
			</div>
			<div class="main_content">
				<a href="<?php echo esc_url( home_url( 'service#section03' ) ); ?>"><img class="main1_img" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/topimage02.jpg" alt="" width="" height="" border="0" />
				<div class="main1_text"><h2>倉庫業</h2>
					<h4>Warehousing business</h4>
					<p>必要なスペース、機能、期間を踏まえた<br>良立地の物流拠点を提供いたします。</p>
				</div>
				<div class="square_border"><div class="triangle"></div></div></a>
			</div>
		</section>
		
		<section class="main2">
			<div class="main2_title"><h3>コバヤシ・エンタープライズは<br>皆様から愛される企業として、<br>お客様のニーズにお応えしてまいります。</h3></div>
			<div class="main2_content">
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><img class="main2_img" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/topimage04.jpg" alt="" width="" height="" border="0" />
				<div class="main2_text">
					<div class="eng-title">Profile</div><h2>会社概要</h2>
				</div>
				<div class="title-container"></div></a>
			</div>
			<div class="main2_content">
				<a href="<?php echo esc_url( home_url( '/base/' ) ); ?>"><img class="main2_img" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/topimage05.jpg" alt="" width="" height="" border="0" />
				<div class="main2_text">
					<div class="eng-title eng-title">Base</div><h2>拠点案内</h2>
				</div>
				<div class="title-container"></div></a>
			</div>
			<div class="main2_content">
				<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>"><img class="main2_img" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/topimage06.jpg" alt="" width="" height="" border="0" />
				<div class="main2_text  main2_text_b">
					<div class="eng-title eng-title-b">Recruit</div><h2>採用情報</h2>
				</div></a>
				<div class="title-container"></div>
			</div>
		</section>
<!-------contents-------->

<!---------- main------->

<?php get_footer(); ?>










