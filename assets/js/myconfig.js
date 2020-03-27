jQuery(function(){

	jQuery('.j_back').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, 1000);
	});

	jQuery(".j_bnt_menu").on("click", function(){
		jQuery(".collapse").toggle("slow");
	});

});