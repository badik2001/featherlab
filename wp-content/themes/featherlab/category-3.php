<?php get_header(); ?>

<?php // get_sidebar('left'); ?>

<?php

    $queryedObject = get_queried_object();

?>




<?php 
    $categories = get_the_category(); 
    $cat_id = $categories[0]->cat_ID // ID категории    
?>



    <div class="main-content container">
        <div class="">
            <h2 class="h2 title"><?=  isset($queryedObject->description) && $queryedObject->description !== '' ? $queryedObject->description : $queryedObject->name  ?></h2>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php // Переделать чтобы выводилось 6 новостей и добавить пагинацию ?>

            <a href="<?php the_permalink() ?>" class="a news-link">

                <?php $postId = get_the_ID() ?>

                <div class="news-thumbnail">
                    <div class="proportion-saver">
                        <div class="img-wrapper">
                            <?= get_the_post_thumbnail( null, 'large', 3) ?>
                        </div>
                    </div>
                </div>

                



                <div class="text-preview">
                    <h3 class="h3"><?php the_title() ?></h3>
<!--                                <p class="p">Текст ...</p>-->
<!--                                <time class="time">01.01.2023</time>-->


                </div>


            </a>


        <?php endwhile; else : ?>

            <p>Записей нет.</p>

        <?php endif; ?>

    </div>

<?php get_footer() ?>





















































<?php get_header(); ?>

<?php // get_sidebar('left'); ?>

<?php

    $queryedObject = get_queried_object();

?>




<?php 
    $categories = get_the_category(); 
    $cat_id = $categories[0]->cat_ID // ID категории    
?>



    <div class="main-content container">
        <div class="">
            <h2 class="h2 title"><?=  isset($queryedObject->description) && $queryedObject->description !== '' ? $queryedObject->description : $queryedObject->name  ?></h2>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php // Переделать чтобы выводилось 6 новостей и добавить пагинацию ?>

            <a href="<?php the_permalink() ?>" class="a news-link">

                <?php $postId = get_the_ID() ?>

                <div class="news-thumbnail">
                    <div class="proportion-saver">
                        <div class="img-wrapper">
                            <?= get_the_post_thumbnail( null, 'large', 4) ?>
                        </div>
                    </div>
                </div>

                



                <div class="text-preview">
                    <h3 class="h3"><?php the_title() ?></h3>
<!--                                <p class="p">Текст ...</p>-->
<!--                                <time class="time">01.01.2023</time>-->


                </div>


            </a>


        <?php endwhile; else : ?>

            <p>Записей нет.</p>

        <?php endif; ?>