<?php 


/*
 1- SETTING = ARMAZENAMENTO NO BANDO DE DADOS
 2- SECTIONS = GRUPO DAS PROPRIEDADES
 3- CONTROLES = AS PROPRIEDADES
*/
function rm_social_customizer($wp_customize){

	//SETTINGS
	$wp_customize->add_setting("rm_twitter", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rm_facebook", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rm_github", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rm_youtube", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rm_behance", array(
		'default' => ''
	));
	
	$wp_customize->add_setting("rm_dribbble", array(
		'default' => ''
	));

	//SECTIONS
	$wp_customize->add_section('rm_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => ''
	));

	//CONTROLLERS
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rm_twitter',
			array(
				'label' => 'link do twitter',
				'section' => 'rm_social_section',
				'settings' => 'rm_twitter',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rm_facebook',
			array(
				'label' => 'link do facebook',
				'section' => 'rm_social_section',
				'settings' => 'rm_facebook',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rm_github',
			array(
				'label' => 'link do github',
				'section' => 'rm_social_section',
				'settings' => 'rm_github',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rm_youtube',
			array(
				'label' => 'link do youtube',
				'section' => 'rm_social_section',
				'settings' => 'rm_youtube',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rm_behance',
			array(
				'label' => 'link do behance',
				'section' => 'rm_social_section',
				'settings' => 'rm_behance',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rm_dribbble',
			array(
				'label' => 'link do dribbble',
				'section' => 'rm_social_section',
				'settings' => 'rm_dribbble',
				'type' => 'text'
			)
		)
	);


}