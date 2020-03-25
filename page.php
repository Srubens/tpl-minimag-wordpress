<?php get_header() ?>
   
   	<div class="box_main_section">
   		<div class="container-fluid">
	   		<div class="row">

	   			<div class="col-md-8 main_content">
	   				
	   				<?php if(have_posts()){ ?>
	   					<?php while(have_posts()){ ?>
							
							<article class="single_article">

								<div class="single_item">
									<!-- PARA COLOCAR MINIATURA -->
			   						<?php if( has_post_thumbnail() ){ ?>
					           	 		<?php the_post_thumbnail('large'); ?>
					           	 	<?php } ?>
				           	 	</div>
								
								<?php the_post(); ?>

				           	 	<div class="single_title">
				           	 		<h1> <?php the_title(); ?> </h1>
				           	 	</div>

								<div class="single_content">
					           	 	<p>
					           	 		<!-- CONTEUDO DO TEXTO -->
					           	 		<?php the_content(); ?>
					           	 	</p>
								</div>


		   					</article>
		   				<?php } ?>
	   				<?php } ?>

	   				<div class="clear"></div>
	   			
	   			</div>
	   			<div class="col-md-4">

					<?php get_sidebar(); ?>

	   			</div>
	   			
	   		</div>
   		</div>
   	</div>


<?php get_footer() ?>