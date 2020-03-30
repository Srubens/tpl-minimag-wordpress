<?php 

/*
 1- SETTING = ARMAZENAMENTO NO BANDO DE DADOS
 2- SECTIONS = GRUPO DAS PROPRIEDADES
 3- CONTROLES = AS PROPRIEDADES
*/
function rm_layout_customizer($wp_customize){

	//HABILITAR O PRIMEIRO MENU OU NÃO
	$wp_customize->add_setting('rm_topMenu_show', array('default' => 'yes'));

	//HABILITAR A AREA DE PESQUISA
	$wp_customize->add_setting('rm_search_show', array('default' => 'yes'));

	//POLITICA DE PRIVACIDADE
	$wp_customize->add_setting('rm_privacy_url', array('default' => 'yes'));

	$wp_customize->add_section('rm_layout_section', array(
		'title' => 'Opções de Layout',
		'priority' => 2,
		'panel' => 'opcoes'
	));

	/*
		OUTROS CAMPOS PARA O ADD CONTROL
		INSRIDOS NO TYPE
		text, checkbox, textarea, select, radio, dropdown-pages	
	*/
	$wp_customize->add_control(
		new WP_Customize_Control( $wp_customize, "rm_topMenu_show", array(
			'label' => 'Mostrar Menu Superior',
			'section' => 'rm_layout_section',
			'settigs' => 'rm_topMenu_show',
			'type' => 'checkbox',
			'choices' => array( 'yes' => 'Sim' )
		) )
	);

	$wp_customize->add_control(
		new WP_Customize_Control( $wp_customize, "rm_search_show", array(
			'label' => 'Mostrar Barra de Busca',
			'section' => 'rm_layout_section',
			'settigs' => 'rm_search_show',
			'type' => 'checkbox',
			'choices' => array( 'yes' => 'Sim' )
		) )
	);

	$wp_customize->add_control(
		new WP_Customize_Control( $wp_customize, "rm_privacy_url", array(
			'label' => 'Mostrar a Pagina de Politica de Privacidade',
			'section' => 'rm_layout_section',
			'settigs' => 'rm_privacy_url',
			'type' => 'dropdown-pages',
		) )
	);

	

}