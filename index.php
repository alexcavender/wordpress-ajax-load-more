<div id="things-go-here"></div>
<div id="load-more-posts">
	<h4>Load More</h4>
</div>

<?php $nonce = wp_create_nonce('extra-special'); ?>
<script>
offset = 10;
jQuery('#load-more-posts').click(function() {
	jQuery(this).html('<i class="fa fa-spinner fa-spin"></i>');
	console.log('loading');

	var ajax_url = '/wp-admin/admin-ajax.php';

	var data = {
		'action': 'load_more_posts',
		'offset': offset,
		'security': '<?php echo $nonce; ?>',
	};
	
	jQuery.post(ajax_url, data, function(response) {

		if (response !== ''){
			jQuery('#things-go-here').append(response);

			offset += 10;
			jQuery('#things-go-here').css('opacity', '1');
			jQuery('#load-more-posts').html('<h4>Load More</h4><img src="/wp-content/themes/usminteractive/images/anchor-dark.svg">');
		} 
		else{
			jQuery('#load-more-posts').hide();
		}
		
	});
});
</script>
