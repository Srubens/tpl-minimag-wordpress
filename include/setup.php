<?php 

function rm_theme_styles(){

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('style-theme', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');


	// SCRIPTS
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/myconfig.js', array("jquery"), false, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array("jquery"), false, true);
	wp_enqueue_script('jsdelivr', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");

}



function rm_after_setup(){

	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//AJUSTANDO OS TIPOS DE POSTS
	add_theme_support('post-formats', array('video', 'audio', 'gallery'));

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', ("Menu Primario"));
	register_nav_menu('topo', 'Menu Topo');

	// REMOVENDO A BARRA DO ADMIN
	// show_admin_bar(false);

	//IMAGEM DE CABEÇALHO
	add_theme_support("custom-header", array(
		'default-image' => get_template_directory_uri() . '/assets/images/header/mar.jpg',
		'width' => 1280,
		'heigth' => 400,
		'flex-width' => true,
		'flex-height' => true,
		'header-text' => false, //SE NAO QUISER TEXTO
		'uploads' => true //SE NÃO QSER UPLOADS COLOCAR FALSE
	));

	//MOSTRA A IMAGEM DE CABEÇALHO
	register_default_headers(array(
		'headerOne' => array(
			'url' => get_template_directory_uri() . '/assets/images/header/mar.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/assets/images/header/mar.jpg',
			'description' => 'Header One'
		),
		'headerTwo' => array(
			'url' => get_template_directory_uri() . '/assets/images/header/ilha.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/assets/images/header/ilha.jpg',
			'description' => 'Header Two'
		),
		'headerThree' => array(
			'url' => get_template_directory_uri() . '/assets/images/header/terra.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/assets/images/header/terra.jpg',
			'description' => 'Header Three'
		)
	));

}

//PARA WIDGETS
function rm_widgets(){

	$SidebarLateral = [
		'name' => 'Sidebar Lateral',
		'id' => 'rm_sidebar',
		'description' => 'Sidebar Lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	];

	$SidebarRodape = [
		'name' => 'Sidebar Rodape',
		'id' => 'rm_rodape',
		'description' => 'Sidebar Rodape',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	];

	register_sidebar($SidebarLateral);
	register_sidebar($SidebarRodape);

}

//PARA A PAGINAÇÃO
function my_pagination() {

	global $wp_query;

	$myPages = [
		'base' => str_replace( 9999999999999, '%#%', esc_url( get_pagenum_link( 9999999999999 ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var( 'paged' ) ),
	    'total' => $wp_query->max_num_pages,
	    'type' => 'list',
	    'prev_next' => false,
	    'prev_text' => 'Página Anterior',
	    'next_text' => 'Próxima Página',
	    'before_page_number' => '',
	    'after_page_number' => '',
	    'show_all' => false,
	    'mid_size' => 3,
	    'end_size' => 1,
	];

	echo paginate_links( $myPages );

}
