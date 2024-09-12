<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="proculture-verification" content="070ee556d9507953310289fce3d9a822" />

	
	<title><?= get_bloginfo(); ?></title>

	<!-- <script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=28006" data-pixel-id="28006"></script> -->


	<script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=22986" data-pixel-id="22986"></script>


    <?php wp_head(); ?>

</head>
<body <?php body_class('site-body'); ?>>
<?php wp_body_open(); ?>	
<div class="footer-holder">
	<header class="site-header">
		<div class="container header-info-block">
			<div class="row align-items-center justify-content-center">
				<!-- <a href="/" class="a col-xs-12 col-md-5 logo-block">					 -->
					
				<?= get_custom_logo() ?>

					<!-- <div class="slogon">
						<p class="p">
							<span></span>						
							<span></span>
							<span></span>
						</p>						
					</div>	 -->									
				<!-- </a> -->
				<!-- <div class="col-xs-12 col-md-4 work-time">
					<p class="p">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</p>
				</div>
				<div class="col-xs-12 col-md-3 contacts">
					<div class="">
						<a href="tel:88422443053" class="a btn"></a>
					</div>
					<div class="">
						<a href="tel:88422443064" class="a btn"></a>
					</div>					
					<span></span>					
				</div> -->
				<!-- <div class="col-xs-12 col-md-1 search"></div> -->

			</div>
		</div>
	</header>
	<nav class="main-nav">
		<div class="container">
			
		
		<?php

			wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'main',
				'container'       => 'div',
				'container_class' => 'row',
				'container_id'    => '',
				'menu_class'      => 'ul',
				'menu_id'         => 'menu',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] );

		?>
		</div>
	</nav>	
	<main class="site-main">



