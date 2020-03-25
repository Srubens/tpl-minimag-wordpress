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

				           	 	<div class="single_data">
				           	 		<p> <?= get_the_date(); ?> </p>
				           	 	</div>

				           	 	<div class="single_title">
				           	 		<h1> <?php the_title(); ?> </h1>
				           	 	</div>

								<div class="single_content">
					           	 	<p>
					           	 		<!-- CONTEUDO DO TEXTO -->
					           	 		<?php the_content(); ?>
					           	 	</p>
								</div>

								<div class="single_comments">
									<p>
					           	 		<!-- COMMENTARIOS 
					           	 			0 comentarios um comentario ou % comentarios -->
					           	 		<?php comments_number(''); ?>
					           	 	</p>
								</div>

		   					</article>
		   				<?php } ?>
	   				<?php } ?>

	   				<?php 
                       
                       /* IMPORTANTE */
           	 	 	   wp_reset_postdata();
           	 	 	   
                       // COLOCANDO A FUNÇÃO COMENTARIOS 					   
						if( comments_open() ){
					   	  comments_template();
					    }
                      
	   				 ?>

	   				<div>
						<!-- PAGINAÇÃO PARA PROXIMOS POSTS OU POSTS ANTERIORES -->
						<div><?php previous_post_link() ?></div>
						<div><?php next_post_link() ?></div>
						<?php  ?>
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