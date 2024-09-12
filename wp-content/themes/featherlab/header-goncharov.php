<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="proculture-verification" content="070ee556d9507953310289fce3d9a822" />
<script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=28006" data-pixel-id="28006"></script>
    
    <title><?= get_the_title() ?></title>

    <?php
    // Подключаем стили, скрипты и прочие метатеги
        wp_head();
    ?>

</head>

<?php
// получаем объект в котором есть Id категории
$dataObj = get_the_category( get_the_ID() );
$dataObj = $dataObj[0];
?>

<body <?php body_class("category-". $dataObj->cat_ID . " site-body body old-site-body"); ?>>

<?php
// Подключаем админ бар
wp_body_open();
?>

<div class="foter-holder">
    <header class="site-header">

        <div class="container">
            <div class="top-block">
                <div class="img-wrapper">
                    <img src="/wp-content/themes/uokm/img/типа-лого.jpg" alt="" class="img">
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

    <section class="banner-section goncharov">
        <div class="container">
            <div class="contacts">
                <h2 class="h2">
                    Историко-мемориальный центр-музей И.А.Гончарова
                </h2>

                <div class="address">
                    <p class="p">г.Ульяновск, ул. Гончарова, 20 (вход со стороны Краснознамённого переулка)</p>
                    <p class="p">Тел. организатора экскурсий: +7(8422)41-01-39. Тел.: +7(8422) 27-86-47, 27-86-45</p>
                    <p class="p">e-mail: goncharov-i-a@mail.ru</p>
                </div>

                <div class="work-hours">
                    <p class="p">Часы работы: с 10.00 - 18.00</p>
                    <p class="p">2 и 4 четверги месяца – 12:00 - 20:00</p>
                    <p class="p">Выходной - понедельник.</p>
                </div>

            </div>
        </div>
    </section>

    <main class="site-main">
        <div class="container">
            <div class="row no-gutters">