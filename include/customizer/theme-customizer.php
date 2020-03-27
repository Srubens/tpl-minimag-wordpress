<?php 

require get_template_directory() . "./include/customizer/social.php";

function rm_customize_register($wp_customize){

	rm_social_customizer($wp_customize);

}