<article class="article_flex">
	<div class="post_item">
		<!-- RETORNAR A QUANTIDADE DE COMENTARIOS QUE TEMOS NO POSTS -->
		<div class="post_comment_area"> <i class="fa fa-comment"></i> <?php comments_number('0', '1', '%'); ?> </div>
		<div class="post_info">
			<!-- PARA MOSTRAR A FOTO OU IMAGEM SE O POST TIVE -->
			<?php if( has_post_thumbnail() ){ ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class' => 'post_thumb') ); ?></a>
			<?php } ?>
		</div>
		<div class="post_data"> <?php get_the_date(); ?> </div>

		<div class="post_content">
			
			<div class="post_title">
				<h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
			</div>

			<p><a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?></a> </p>
		
		</div>

	</div>
</article>