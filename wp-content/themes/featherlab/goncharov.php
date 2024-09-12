<?php
/*
Template Name: ИМЦ музей Гончарова
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

get_header('goncharov');
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

            <div class="">
                <?php 


                    //var_dump(get_post_meta());


                ?>
            </div>

        </div>

    </article><!-- #post-<?php the_ID(); ?> -->

    <div class="backward-link">
        <a href="<?= $_SERVER["HTTP_REFERER"]?>" class="a">Вернутся к списку ...</a>
    </div>

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
