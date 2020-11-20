<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<title>コバヤシエンタープライズ</title>
	<!--[if lt IE 9]>-->
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="#">	
	<link href="https://fonts.googleapis.com/css?family=Teko:300" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header>
	<div class="header-side1">
		<div id="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img_pc" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo_white.svg" alt="ロゴ"/>
			<img class="img_sp" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo_white.svg" alt="ロゴ"/></a>
		</div>
		<nav class="globalMenuSp">
								<img class="img_sp" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo_white.svg" alt="" width="" height="" border="0" />
				<ul class="nav1">
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">サービス</a>
						<div>
						<a class="servis-child" href="<?php echo esc_url( home_url( '/haken/' ) ); ?>">労働者派遣事業に関わる情報</a>
						</div>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">会社概要</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/base/' ) ); ?>">拠点案内</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">サイトマップ</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/sitepolicy/' ) ); ?>">サイトポリシー</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a>
					</li>
			</ul> 
		</nav>
		<div class="address">
			<p>本社<br>
				<span class="border"></span>
				&#12306;220-0042<br>
				神奈川県横浜市西区戸部町 1−10<br></p>
			<p>横浜支店<br>
				<span class="border"></span>
				&#12306;231-0801<br>
				神奈川県横浜市中区新山下 3−9−1<br></p>
			<h3>TEL.045-625-0441</h3>
			<h3>FAX.045-625-0442</h3>
		</div>
	</div>
	<div class="header-side2">
		<h5><?php custom_breadcrumb(); ?></h5>
		<h5 class="h5-front"><?php if (is_front_page('') ) echo('ホーム'); ?></h5>
			<h4>
				<?php 
				if ( is_home() || is_front_page() ) echo('Home');
				elseif( is_page('service') ) echo ('Service'); 
				elseif( is_page('about') ) echo ('ABOUT');
				elseif( is_page('president') ) echo ('Pres.'); 
				elseif( is_page('recruit') ) echo ('Recruit');
				elseif( is_page('contact') ) echo ('Contact'); 
				elseif( is_page('sitemap') ) echo ('Sitemap');
				elseif( is_page('privacypolicy') ) echo ('PRIVACY POLICY'); 
				elseif( is_page('haken') ) echo ('Service');
				elseif( is_page('base') ) echo ('BASE'); 
				elseif( is_page('sitepolicy') ) echo ('SITE<br>POLICY'); 
				elseif( is_page('contact-thanks') ) echo ('CONTACT<br>THANKS');
				elseif( is_page('recruit-thanks') ) echo ('RECRUIT<br>THANKS'); 
				elseif( is_page('archive') ) echo ('INFO'); 
				?>
			</h4>
		<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/header2_img.jpg" class="header2_img" alt="" width="" height="" border="0" />
	</div>
		<div class="navToggle">
    		<span></span><span></span><span></span>
		</div>
	</header>
	<main id="contents">