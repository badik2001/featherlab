<?php
/*
Template Name: Шаблон страныцы Музей победы
Template Post Type: post
*/
?>

<?php
	
	/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('old');
?>

    <?php get_sidebar('left'); ?>

    <div class="main-content">
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();


	/////////
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

		<div class="content">

			<header class="entry-header alignwide">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();

				
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer default-max-width">
				
			</footer><!-- .entry-footer -->

		</div>

	</article><!-- #post-<?php the_ID(); ?> -->

    <div class="backward-link">
        <a href="<?= $_SERVER["HTTP_REFERER"]?>" class="a">Вернутся к списку ...</a>
    </div>

    	<section class="section-wm-news">
    		
    		<div class="container">


		
			<h2 class="h2"><?= get_cat_name( 25 ) ?></h2>
		

		
				
				<?php				

					$perfomaces = get_posts( [ 'category' => 25, 'order' => 'DESC' ] );	

						foreach($perfomaces as $perfomace){

				?>
							<a href="<?= get_permalink( $perfomace->ID ) ?>" class="a news-link">
															

							<div class="news-thumbnail">
			                    <div class="proportion-saver">
			                        <div class="img-wrapper">
			                        	<img src="<?= get_the_post_thumbnail_url( $perfomace->ID ) ?>" alt="" class="img">
			                         </div>
			                    </div>
			                </div>

			                <div class="text-preview">
								<h3 class="h3"><?= $perfomace->post_title ?></h3>
							</div>
								<!-- <div class="date-place">
									 <p class="p">date</p>
									<p class="p">place</p> 

									<time datetime="2023-03-28">28.03.2023</time>
									<time datetime="2023-03-29">28.03.2023</time>
								</div> -->
								
							</a>

				<?php

					}

					wp_reset_query(); // сброс запроса

				?>				
			

		
	</div>

    	</section>

    </div>

<?php
/////////
	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	
endwhile; // End of the loop.

get_footer('old');