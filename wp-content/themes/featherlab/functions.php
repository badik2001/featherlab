<?php

// подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {	
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css', [], date("Ymdhms"), "all" );
	wp_enqueue_style( 'common-styles', get_template_directory_uri() . '/css/styles.css', [], date("Ymdhms"), "all" );
	wp_enqueue_script( 'common', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true );
}

// Отключаем Guttengerg
if( 'disable_gutenberg' ){
	remove_theme_support( 'core-block-patterns' ); // WP 5.5

	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	// отключим подключение базовых css стилей для блоков
	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}

add_filter( 'use_block_editor_for_post_type', 'my_disable_gutenberg', 10, 2 );

function my_disable_gutenberg( $current_status, $post_type ) {

	$disabled_post_types = [ 'book', 'movie' ];

	return ! in_array( $post_type, $disabled_post_types, true );
}


/**
 * 
 * Убираем category из URL
 *  
 * */

// add_filter( 'category_link', function($a){
// 	return str_replace( 'category/', '', $a );
// }, 99 );

// add_filter( 'post_link', function($a){
// 	return str_replace( 'category/', '', $a );
// }, 99 );

add_theme_support( 'post-thumbnails');

add_theme_support( 'custom-logo', [] );


// Регистрируем возможности темы
// add_action( 'after_setup_theme', function(){

// 	// возможность изменять фон из админки
// 	add_theme_support( 'custom-background' );

// 	// возможность изменять изображения в шапке из админки
// 	add_theme_support( 'custom-header' );

// 	// включаем меню в админке
// 	add_theme_support( 'menus' );

// 	// создание метатега <title> через хук
// 	add_theme_support( 'title-tag' );

// 	// возможность загрузить картинку логотипа в админке
// 	add_theme_support( 'custom-logo', [] );
// }


// Получаем ID категории 
$categories = get_the_category(); 
//$cat_id = $categories[0]->cat_ID // ID самой категории
//$parent_id = $categories[0]->category_parent // ID категории-родителя


// функция для реформата даты. из mysql в вида dd.mm.yyyy

function time_generator( $input_date )
{

// Значения типа 01.01.0101 00:00

	if( preg_match( "/^\d{1,2}\.\d{1,2}\.\d{2,4} \d{1,2}\:\d{1,2}$/", $input_date )){
		

		$input_date = mb_substr($input_date, 0, 10);

		$input_date = explode('.', $input_date);

		$year = $input_date[2];
		$month = $input_date[1];
		$day = $input_date[0];
		

		return '<time datetime="' . $year . "-" . $month . "-" . $day . '" class="date-place">' . $day . "." . $month . "." . $year . '</time>';

// Значения типа 01.01.0101

	} elseif ( preg_match( "/^\d{1,2}\.\d{1,2}\.\d{2,4}$/", $input_date )) {
		 

		$input_date = mb_substr($input_date, 0, 10);

		$input_date = explode('.', $input_date);

		$year = $input_date[2];
		$month = $input_date[1];
		$day = $input_date[0];
		

		return '<time datetime="' . $year . "-" . $month . "-" . $day . '" class="date-place">' . $day . "." . $month . "." . $year . '</time>';

// Значения типа 0101-01-01 01:01:01

 	} elseif ( preg_match( '/^\d{2,4}\-\d{1,2}\-\d{1,2}$/', $input_date ) ) {		 

		$input_date = mb_substr($input_date, 0, 10);

		$input_date = explode('-', $input_date);

		$year = $input_date[0];
		$month = $input_date[1];
 		$day = $input_date[2];
		

 		echo '<time datetime="' . $year . "-" . $month . "-" . $day . '" class="date-place">' . $day . "." . $month . "." . $year . '</time>';

 // Значения типа 0101-01-01 01:01:01

 	} elseif ( preg_match( '/^\d{2,4}\-\d{1,2}\-\d{1,2} \d{1,2}:\d{1,2}:\d{1,2}/', $input_date ) ) { 		

		$input_date = mb_substr($input_date, 0, 10);

		$input_date = explode('-', $input_date);

		$year = $input_date[0];
		$month = $input_date[1];
 		$day = $input_date[2];

		// $hours = $input_date[2];
 		// $minutes = $input_date[2];




 		echo '<time datetime="' . $year . "-" . $month . "-" . $day . '" class="date-place">' . $day . "." . $month . "." . $year . '</time>';

 	}



	
}


// Добавляем стили для админки

function my_stylesheet1(){
  wp_enqueue_style("custom-style-admin", "/wp-content/themes/uokm/css/admin.css");
}
add_action('admin_head', 'my_stylesheet1');


// function time_tag_generator( $inp_date = '' ){


// 	if($inp_date = '') { return; }


// 	$inp_date = $inp_date explode('.', $inp_date);


// 	var_dump($inp_date);

// 	// $year = $inp_date[2];
// 	// $month = $inp_date[1];
// 	// $day = $inp_date[0];

// 	// echo '<time datetime="' . $year . "-" . $month . "-" . $day . '" class="date-place">' . $inp_date . '</time>';

// }

// Создаем мета блок с произольными полями

add_action('add_meta_boxes', 'post_custom_attributes', 1);

function post_custom_attributes() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}

function extra_fields_box_func( $post ){
	?>	

	

	

	
				
	<?php
}


// включаем обновление полей при сохранении
add_action( 'save_post', 'my_extra_fields_update', 0 );

## Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
	// базовая проверка
	if (
		   empty( $_POST['extra'] )
		|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key => $value ){
		if( empty($value) ){
			delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
	}

	return $post_id;
}

// Шорткод

add_shortcode( 'foobar', 'foobar_shortcode' );
function foobar_shortcode( $atts ) {

	$atts = shortcode_atts( [
		'name' => 'Noname',
		'age'  => 18,
	], $atts );

	return "Меня зовут {$atts['name']} мне {$atts['age']} лет";
}


// laureate создать новый тип данных

add_action( 'init', 'register_feather_type' );

function register_feather_type(){

	register_post_type( 'feather', [
		'label'  => 'feather',
		'labels' => [
			'name'               => 'Перья', // основное название для типа записи
			'singular_name'      => 'Перо', // название для одной записи этого типа
			'add_new'            => 'Добавить перо', // для добавления новой записи
			'add_new_item'       => 'Добавление перо', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование перо', // для редактирования типа записи
			'new_item'           => 'Новое перо', // текст новой записи
			'view_item'          => 'Смотреть перья', // для просмотра записи этого типа.
			'search_items'       => 'Искать перья', // для поиска по этим типам записи
			'not_found'          => 'Перо не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Перья', // название меню
		],
		'description'            => 'feather',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => true, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => null,
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		'map_meta_cap'      => true, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => [ 'title','editor','thumbnail','excerpt','custom-fields','page-attributes','post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['category'],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => 'feather',
		'hierarchical'        => true,
		'with_front'          => true,
		'rewrite'             => true
	] );

}

add_action('add_meta_boxes', 'feather_custom_attributes', 1);

function feather_custom_attributes() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_feather', 'feather', 'normal', 'high'  );
}

function extra_fields_box_feather( $post ){
	
?>

	<div>
		<label class="label"> 
			<span style="width: 50%;">Наименование:</span>
			<input type="text" name="extra[feather_name]" value="<?php echo get_post_meta($post->ID, 'feather_name', 1); ?>" style="width: 50%;" />
		</label>
	</div>

	<div>О пере:
		<textarea type="text" name="extra[about_feather]" style="width:100%;height:50px;" class="textarea"><?php echo get_post_meta($post->ID, 'about_feather', 1); ?></textarea>
	</div>

	<div>Отряд:
		<textarea type="text" name="extra[feather_color]" style="width:100%;height:50px;" class="textarea"><?php echo get_post_meta($post->ID, 'feather_color', 1); ?></textarea>
	</div>

<?php

}



// последняя строка