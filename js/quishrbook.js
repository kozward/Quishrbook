jQuery(function($){
	
	// bind event handlers to modal triggers
	$('body').on('click', '.trigger', function(e){
		e.preventDefault();
		// ajax coffee detail
		$.ajaxSetup({cache:false});
		var coffee_link = $(this).attr("data");
		// $("#coffee-detail").html("content loading");
		$('#coffee-detail').modal().open();
		$("#coffee-detail").load(coffee_link);
	});
	
	// attach modal close handler
	$('.modal .close').on('click', function(e){
		e.preventDefault();
		$.modal().close();
	});

});