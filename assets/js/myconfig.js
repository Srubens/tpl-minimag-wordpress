window.morePostLoading = false;

function loadMorePosts(){
	if(window.morePostLoading == false){

		window.morePostLoading = true;

		jQuery('.j_btn').hide();
	
		var offset = jQuery('.post_item').length;
		jQuery.ajax({
			type:'POST',
			url: ajaxUrl,
			data: { action:'LoadMorePosts', offset: offset },
			success: function(html){
				
				jQuery('.j_btn').show()
				
				if( html != '' ){
					jQuery('.post_content_more').append(html);
				}else{
					jQuery('.j_btn').hide()
				}

				window.morePostLoading = false;
			}
		});
	}
	
	
}

jQuery(function(){

	jQuery('.j_back').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, 1000);
	});

	jQuery(".j_bnt_menu").on("click", function(){
		jQuery(".collapse").toggle("slow");
	});

	jQuery('.j_btn').on('click', loadMorePosts);

	jQuery(window).on('scroll', function(){
		//WINDOW.SCROLLY = POSICAO ATUAL DO SCROLL
		//DOCUMENT.BODY.SCROLLHEIGHT = ALTURA ATUAL DO SITE
		var porcent = ( window.scrollY / document.body.scrollHeight ) * 100;
		// console.log(porcent);
		if( porcent >= 40 ){
			loadMorePosts();
		}
	});

});