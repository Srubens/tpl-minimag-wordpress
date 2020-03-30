<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viweport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<title><?php bloginfo("name") ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<!-- GET THEME MOD OPCAO DE CUSTOMIZAÇÃO -->
	<?php if( get_theme_mod('rm_topMenu_show') ){ ?>
		<header>
			<div class="top_header">
				<nav class="navbar navbar-expand-lg ">
				  <button class="navbar-toggler btn_menu_header j_bnt_menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span>Menu<i class="fa fa-bars"></i></span>
				  </button>
				
				  <?php 
	                 
	                 if( has_nav_menu('primary') ){
			            wp_nav_menu([
			              'theme_location' => 'primary',
			              'fallback_cb' => false,
			              'container_class' => 'collapse navbar-collapse menu_header_primario',
			              'container_id' => 'navbarResponsive',
			              'menu_class' => 'navbar-nav align-content-start',
			              'walker' => new WP_Bootstrap_Navwalker(),
			              'depth' => 2
			            ]);
			          }

				  ?>
				</nav>
			</div>
		</header>
	<?php } ?>

	<div class="main_header">
		<div class="container-fluid">
			<div class="main_logo">
				<?php 

		         //LOGO CUSTOMIZADA
		         if( has_custom_logo() ){
		            the_custom_logo();
		         } 

			    ?>
			</div>

			<div class="main_nav_border">
				<div class="main_menu_top">
					<?php 
                 
	                    if( has_nav_menu('topo') ){
				            wp_nav_menu([
				              'theme_location' => 'topo',
				              'fallback_cb' => false,
				              'container_id' => 'navbarResponsive',
				              'menu_class' => 'navbar-nav sub_menu_topo',
				              'walker' => new WP_Bootstrap_Navwalker(),
				              'depth' => 2
				            ]);
				        }

					?>
				</div>
				<?php if( get_theme_mod('rm_search_show') ){ ?>
					<div class="main_search">
						<?php get_search_form(); ?>
					</div>
				<?php } ?>
			</div>

			<div class="main_info">
				<div class="row">
					<div class="col-md-8">

						<div class="post_random_post">
							<strong>Você ja leu este Artigo?</strong>
							<?php 
  							   
  							   $rm_Query = new WP_Query(array(
  							   		'posts_per_page' => 1,	
  							   		'post_type' => 'post',	
  							   		'orderby' => 'rand'	
  							   ));

  							   if( $rm_Query->have_posts() ){
  							   	  while( $rm_Query->have_posts() ){
  							   	  	  $rm_Query->the_post();
					   	  	?>
					   	  			  <a class="post_random" href="<?php the_permalink(); ?>"><?= the_title(); ?></a>	
				   	  	    <?php 
  							   	  }
  							   	  //PARA NAO AFETAR OS OUTROS POST OU AS OUTRAS POSTAGENS
  							   	  wp_reset_postdata();
  							   } 								

							?>
						</div>

					</div>
					<div class="col-md-4 social_area">
						<div class="box_social_area">

							<div class="social_follow">
								<h3>Follow Me:</h3>
							</div>
							
							<div class="social_icons">
								<?php 
 								   if(get_theme_mod('rm_twitter')){
 								?>
	 								<a href="<?php echo get_theme_mod('rm_twitter'); ?>" target="_blank" ><span><i class="fa fa-twitter-square" title="twitter" ></i></span></a>

 								<?php   		
 								   }
								?>

								<?php 
 								   if(get_theme_mod('rm_facebook')){
 								?>
	 								<a href="<?php echo get_theme_mod('rm_facebook'); ?>" target="_blank" ><span><i class="fa fa-facebook-square" title="facebook" ></i></span></a>

 								<?php   		
 								   }
								?>

								<?php 
 								   if(get_theme_mod('rm_github')){
 								?>
	 								<a href="<?php echo get_theme_mod('rm_github'); ?>" target="_blank" ><span><i class="fa fa-github-square" title="github" ></i></span></a>

 								<?php   		
 								   }
								?>
								
								<?php 
 								   if(get_theme_mod('rm_youtube')){
 								?>
	 								<a href="<?php echo get_theme_mod('rm_youtube'); ?>" target="_blank" ><span><i class="fa fa-youtube-square" title="youtube" ></i></span></a>

 								<?php   		
 								   }
								?>
								
								<?php 
 								   if(get_theme_mod('rm_behance')){
 								?>
	 								<a href="<?php echo get_theme_mod('rm_behance'); ?>" target="_blank" ><span><i class="fa fa-behance-square" title="behance" ></i></span></a>

 								<?php   		
 								   }
								?>
								
								<?php 
 								   if(get_theme_mod('rm_dribbble')){
 								?>
	 								<a href="<?php echo get_theme_mod('rm_dribbble'); ?>" target="_blank" ><span><i class="fa fa-dribbble" title="dribbble" ></i></span></a>

 								<?php   		
 								   }
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>