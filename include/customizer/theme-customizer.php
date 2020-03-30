<?php 

require get_template_directory() . "./include/customizer/social.php";
require get_template_directory() . "./include/customizer/layout.php";

function rm_customize_register($wp_customize){

	$wp_customize->get_section('title_tagline')->title = 'Nome do Site e Logo';

	$wp_customize->get_section('custom_css')->description = 'Só coloque CSS adicional se você souber fazer css, ou souber de front-end';

	//CRIANDO UM PAINEL
	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => 1
	));

	rm_social_customizer($wp_customize);

	rm_layout_customizer($wp_customize);

	//NO NAVEGADOR PESQUISAR POR sections:
	// echo "<pre>";
	// 	print_r($wp_customize);
	// echo "</pre>";
	

}