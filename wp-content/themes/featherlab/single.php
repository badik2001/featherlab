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

get_header();
?>

    <?php // get_sidebar('left'); ?>

    <main class="main-content">
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	$current_post_id = get_the_ID();


	

	/////////
?>


	<article id="post-<?php $current_post_id ?>" <?php post_class('container'); ?>>

		<div class="content">

			<header class="entry-header alignwide">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
			</header><!-- .entry-header -->
<?php


	// Получаем даты или дату мероприятия 

	$start_date = get_post_meta( $current_post_id, 'start_date', true );

	$end_date = get_post_meta( $current_post_id, 'end_date', true );

	$single_date = get_post_meta( $current_post_id, 'single_date', true );

	if($start_date && $end_date){
		$date_str = 'Мероприятие пройдет с ' . time_generator( $start_date ) . ' по ' . time_generator( $end_date );
	} elseif ($single_date) {
		$date_str = 'Мероприятие пройдет ' . time_generator( $single_date ) ;
	} elseif ($start_date === '' && $end_date) {
		$date_str = 'Мероприятие продлится до ' . time_generator( $end_date ) ;
	}


?>
			<div class="date-wrp">
				<?= $date_str ?>
			</div>

			<div class="entry-content">
				<?php
					the_content();				
				?>
			</div>

			<div class="price-block">				
				
				<?php

					if(get_post_meta( $current_post_id, 'custom_price', true ) !== ''){

						if( get_post_meta( $current_post_id, 'custom_price', true ) !== '' ){

							echo '<h3 class="h3">Стоимость билетов при покупке в кассах музея</h3>';

							echo '<p class="p"><strong>' . get_post_meta( $current_post_id, 'custom_price', true ) . ' руб.</p>';
						};

					} else {

						if(get_post_meta( $current_post_id, 'show_price', true ) === "1"){
	
							echo '<h3 class="h3">Стоимость билетов при покупке в кассах музея</h3>';

							echo '<ul class="ul">';

							if( get_post_meta( $current_post_id, 'pensioners_price', true ) !== '' ){
							echo '<li class="li">для пенсионеров <strong>' . get_post_meta( $current_post_id, 'pensioners_price', true ) . '</strong> руб.</li>';
							};

							if( get_post_meta( $current_post_id, 'adult_price', true ) !== '' ){
								echo '<li class="li">для взрослых <strong>' . get_post_meta( $current_post_id, 'adult_price', true ) . '</strong> руб.</li>';
							};

							if( get_post_meta( $current_post_id, 'students_price', true ) !== '' ){
								echo '<li class="li">для студентов <strong>' . get_post_meta( $current_post_id, 'students_price', true ) . '</strong> руб.</li>';
							};

							if( get_post_meta( $current_post_id, 'childrens_price', true ) !== '' ){
								echo '<li class="li">для детей от 14 лет <strong>' . get_post_meta( $current_post_id, 'childrens_price', true ) . '</strong> руб.</li>';
							};

							echo '</ul>';

						}						

					}					

				?>

			</div>

			
				<?php

					//echo the_ID();
					
					//echo get_post_meta( 623, 'post_name', false );

					//var_dump($everything);					
					
				
				?>
			

			<footer class="entry-footer default-max-width">
				
			</footer><!-- .entry-footer -->

		</div>

	</article><!-- #post-<?php the_ID(); ?> -->

    <div class="backward-link">
        <a href="<?= $_SERVER["HTTP_REFERER"]?>" class="a">Вернутся к списку ...</a>
    </div>

    </main>


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

get_footer();