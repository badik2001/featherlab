<aside class="left-sidebar">
    <div class="content-wrapper">

        <div class="branch">
            <h2 class="h2 title">
                Филиалы
            </h2>
            <ul class="ul">
                <?php

                    $perfomaces = get_posts( [ 'category' => 15, 'order' => 'ASC' ] );

                    // echo '<pre>';
                    //  var_dump($perfomaces);
                    // echo '</pre>';

                    foreach($perfomaces as $perfomace){

                        ?>


                    <li class="li">
                        <!-- <img src="<?= get_the_post_thumbnail_url( $perfomace->ID ) ?>" alt="" class="img"> -->
                        <a href="<?= get_permalink( $perfomace->ID ) ?>" class="a"><?= $perfomace->post_title ?></a>
                    </li>


                    
                <?php

                    }

                    wp_reset_query(); // сброс запроса

                ?>
            </ul>

        </div>

    </div>

    <div class="content-wrapper">
        <a href="/%d0%bf%d1%83%d1%88%d0%ba%d0%b8%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%ba%d0%b0%d1%80%d1%82%d0%b0/" class="pushkin-card">
            <div class="img-container">
                <div class="proportion-saver">
                    <div class="img-wrapper">
                        <img src="/wp-content/uploads/2023/03/пушкинская_карта.jpg" alt="Пушкинская карта. Ульяновский областной краеведческий музей" class="img">
                    </div>
                </div>
            </div>
        </a>
    </div>    

    <a href="/%d0%bf%d1%83%d1%88%d0%ba%d0%b8%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%ba%d0%b0%d1%80%d1%82%d0%b0/" class="a what-is-pc">
        <span>Что такое "Пушкинская карта"</span>
    </a>

    <a href="/%d0%bf%d1%83%d1%88%d0%ba%d0%b8%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%ba%d0%b0%d1%80%d1%82%d0%b0/" class="a how-i-get-pc">
        <span>Как получить "Пушкинскую карту"</span>
    </a>

    <div class="content-wrapper premiya-goncharova">
        <a href="/part/premiya_goncharova/index.html" class="pushkin-card">
            <div class="img-container">
                
                        <img src="/wp-content/uploads/2023/03/гончаров.jpg" alt="" class="img">
                    
            </div>
            <h3 class="h3">Международная литературная<br>премия имени И.А. Гончарова</h3>
        </a>
    </div>

	<?php

    	$perfomaces = get_posts( [ 'category' => 21, 'order' => 'DESC' ] );

    	// echo '<pre>';
    	// 	var_dump($perfomaces);
    	// echo '</pre>';

    	foreach($perfomaces as $perfomace){

		?>

            <div class="content-wrapper important">
                <a href="<?= get_permalink( $perfomace->ID ) ?>" class="a news-preview col-xs-12 col-md-6 col-lg-4">
                    <div class="img-container">                
                        <img src="<?= get_the_post_thumbnail_url( $perfomace->ID ) ?>" alt="" class="img">                    
                    </div>
                    <h3 class="h3"><?= $perfomace->post_title ?></h3>
                </a>
            </div>

		<?php

    	}

    	wp_reset_query(); // сброс запроса

	?>

</aside>