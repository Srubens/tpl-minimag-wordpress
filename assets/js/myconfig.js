jQuery(function(){

	jQuery('.j_back').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, 1000);
	});

	jQuery(".j_bnt_menu").on("click", function(){
		jQuery(".collapse").toggle("slow");
	});

	function loadMorePosts(){
		
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
			}
		});
		
	}

	jQuery('.j_btn').on('click', loadMorePosts);

});