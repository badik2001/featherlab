<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="proculture-verification" content="070ee556d9507953310289fce3d9a822" />


	<title><?= get_bloginfo(); ?></title>
	
	<!-- <script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=28006" data-pixel-id="28006"></script> -->

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
	
	<script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=22986" data-pixel-id="22986"></script>


	<?php wp_head(); ?>

</head>

<body <?php body_class('site-body'); ?>>
	<div class="left-nav">
		<div class="proportion-saver square">
			<div class="img-wrp">
				<img src="/wp-content/themes/featherlab/img/UOKM_logo2.png" alt="" class="img">
			</div>
        </div>
		
		<?php

			wp_nav_menu([
				'theme_location'  => '',
				'menu'            => 'left',
				'container'       => 'nav',
				'container_class' => 'nav main-nav',
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
			]);

		?>

	</div>
	<?php wp_body_open(); ?>
	<div class="footer-holder">
		<header class="site-header">
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
				<?php if (is_front_page()){?>
				<!-- если главная страница, то ни чего не выводим -->
				<?php } else { ?>
				 <div class="col-xs-12 col-md-4 work-time">
					<p class="p">
						<span></span>
						<span></span>
						<img src="/wp-content/themes/featherlab/img/logo_laborat.png" alt="Лаборатория перьевого покрова птиц" class="img"></img>
					</p>
				</div>
				<?php }?>
				<!-- <div class="col-xs-12 col-md-3 contacts">
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



				
			
	
	<main class="site-main">