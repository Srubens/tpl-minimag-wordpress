<form role="search" method="GET" class="search-form" action="
<?php  echo esc_url(home_url('/')); ?>" >

	<input class="form-control" placeholder="pesquisar por" type="search" name="s" value="<?php the_search_query(); ?>">
	<input class="btn btn-secondary" type="submit" value="Pesquisar Por">
</form>