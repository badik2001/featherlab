<?php get_header(); ?>

<?php // get_sidebar('left'); ?>

<?php

    $queryedObject = get_queried_object();

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
                            <?= get_the_post_thumbnail( null, 'large', $postId_) ?>
                        </div>
                    </div>
                </div>

                <?php

                    // Получаем даты или дату мероприятия 

                    $start_date = get_post_meta( $postId, 'start_date', true );

                    $end_date = get_post_meta( $postId, 'end_date', true );

                    $single_date = get_post_meta( $postId, 'single_date', true );

                    if($start_date && $end_date){
                        $date_str = 'Мероприятие пройдет с ' . time_generator( $start_date ) . ' по ' . time_generator( $end_date );
                    } elseif ($single_date) {
                        $date_str = 'Мероприятие пройдет ' . time_generator( $single_date ) ;
                    } elseif ($start_date === '' && $end_date) {
                        $date_str = 'Мероприятие продлится до ' . time_generator( $end_date ) ;
                    }

                ?>



                <div class="text-preview">
                    <h3 class="h3"><?php the_title() ?></h3>
<!--                                <p class="p">Текст ...</p>-->
<!--                                <time class="time">01.01.2023</time>-->

                    
                    <p class="p"><?= $date_str ?></p>
                    
                    
                    <div class="date-wrp">
                        Опубликовано <?=  time_generator( get_the_date() ) ?>
                    </div>


                </div>


            </a>


        <?php endwhile; else : ?>

            <p>Записей нет.</p>

        <?php endif; ?>

    </div>

<?php get_footer() ?>