<footer>
	<div class="footer_widgets">
		<div class="row">
			<?php
			   if( is_active_sidebar('rm_rodape') ){
		       	 dynamic_sidebar('rm_rodape');
		       }
			?>
		</div>
	</div>
	<div class="main_footer">
		
		<div class="copy">
			<p>&copy; Todo os direitos reservados! 
			<?php if( get_theme_mod('rm_privacy_url') ){ ?> 
				<a href="<?php the_permalink( get_theme_mod('rm_privacy_url') ); ?>">Politica de Privacidade!</a> 
			<?php } ?> </p>
		</div>

		<div class="main_scroll_top j_back" data-js="scrollTop" >
			<span class="icon_scroll_top"><i class="fa fa-sort-up" ></i></span>
		</div>
	
		<div class="company">Minimag Ano <?= date('Y'); ?></div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>