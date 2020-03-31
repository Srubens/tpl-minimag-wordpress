<?php get_header() ?>
   
   	<div class="box_main_section">
   		<div class="container-fluid">
	   		<div class="row">

	   			<div class="col-md-8 main_content">
					
					<!-- SE CASO O TEMA PRECISE DE UMA IMAGEM TEMA -->
					<?php if( get_header_image() ){ ?>
	   				<div class="custom_header">
	   					<img src="<?php header_image(); ?>" alt="custom-header">
	   				</div>
		   			<?php } ?>
	   				
	   				<?php if(have_posts()){ ?>
	   					<?php while(have_posts()){ ?>

	   						<?php the_post(); ?>

	   						<?php get_template_part('template_parts/post') ?>
		   				
		   				<?php } ?>
	   				<?php } ?>

	   				<div class="pagenation">
		   				<?php my_pagination() ?>
	   				</div>

	   				<div class="clear"></div>
	   			
	   			</div>
	   			<div class="col-md-4">

					<?php get_sidebar(); ?>

	   			</div>
	   			
	   		</div>
   		</div>
   	</div>


<?php get_footer() ?>