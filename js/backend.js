jQuery(document).ready(function($){
	/*Backend Settings Tabs Configuration*/
	$('ul.mh-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.mh-tabs li').removeClass('current');
		$('.mh-tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	/*Color Picker*/
	$('.mh-color-picker').wpColorPicker();

	/*click and copy*/
	$('.mh-copy-to-clipboard input').click(function() {
    	$(this).focus();
    	$(this).select();
    	document.execCommand('copy');
    	//alert('copied');
  	});

	/*Source Select*/
	$('.mh-source').on('change',function(){
		var source_element = $(this); 
		var source_val = $('option:selected',this).val();
		switch(source_val){
			case 'mh-posts':
				console.log('posts');
				source_element.closest('.mh-form-field').siblings('.mh-source-content').hide();
				source_element.closest('.mh-form-field').siblings('.mh-post-field-wrapper').show();
			break;
			case 'mh-custom':
				console.log('custom');
				source_element.closest('.mh-form-field').siblings('.mh-source-content').hide();
				source_element.closest('.mh-form-field').siblings('.mh-custom-field-wrapper').show();

			break;
		}
	});

	/*Post Source Select*/
	$('.mh-post-source').on('change',function(){
		var source_element = $(this); 
		var source_val = $('option:selected',this).val();
		switch(source_val){
			case 'mh-latest-post':
				source_element.closest('.mh-form-field').siblings('.mh-post-categories').hide();
			break;
			case 'mh-selected-category':
				source_element.closest('.mh-form-field').siblings('.mh-post-categories').show();
			break;
		}
	});


});