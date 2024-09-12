<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="proculture-verification" content="070ee556d9507953310289fce3d9a822" />


<?php if(is_front_page()) { ?>
    <title><?= get_bloginfo('name'); ?></title>
<?php } else { ?>
    <title><?= get_the_title() ?></title>
<?php } ?>


    

    <?php
        // Подключаем стили, скрипты и прочие метатеги
        wp_head();
    ?>

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9M6N0KLJLM"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9M6N0KLJLM');
</script>

<!-- Yandex.Metrika counter uokm.ru -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(92801918, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92801918" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter uokm.ru -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92943456, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92943456" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=28006" data-pixel-id="28006"></script>

<?php
    // получаем объект в котором есть Id категории
    $dataObj = get_the_category( get_the_ID() );
    $dataObj = $dataObj[0];
?>

    <body <?php body_class("parent-cat-". $dataObj->cat_ID . " site-body body old-site-body"); ?>>

    <?php
        // Подключаем админ бар
        wp_body_open();
    ?>

        <div class="foter-holder">
            <header class="site-header">

                <div class="container">
                    <div class="top-block-wrapper">
                        <div class="top-block">
                            <div class="img-wrapper">
                                <img src="/wp-content/themes/uokm/img/типа-лого.jpg" alt="" class="img">
                            </div>
                        </div>
                    </div>                    

                        <?php
                            wp_nav_menu( [
                                'theme_location'  => '',
                                'menu'            => 'main',
                                'container'       => 'nav',
                                'container_class' => 'main-nav',
                                'container_id'    => '',
                                'menu_class'      => 'ul row no-gutters',
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

            </header>

            <section class="banner-section konsp-kv">
                <div class="container">
                    <div class="contacts">
                        <h2 class="h2">
                            Областное государственное бюджетное учреждение культуры "Ульяновский областной краеведческий музей имени И.А.Гончарова" (ОГБУК Краеведческий музей)
                        </h2>
                        <div class="address">
                            <p class="p">432017 г. Ульяновск, бульвар Новый Венец, 3 /4</p>
                            <p class="p">Тел.: (8422) 44-30-53, 44-30-64; факс: (8422) 44-30-92</p>
                            <p class="p">e-mail: uokm@mail.ru</p>
                        </div>

                        <div class="work-hours">
                            <p class="p">Часы работы: с 10:00 до 18:00</p>
                            <p class="p">2 и 4 четверги - с 12.00 до 20.00</p>
                            <p class="p">Выходной - понедельник.</p>
                        </div>

                    </div>
                </div>
            </section>

            <main class="site-main">
                <div class="container">
                    <div class="row no-gutters">