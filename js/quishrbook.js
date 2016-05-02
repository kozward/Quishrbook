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

	// open user slide out panel
	$('#open-user-panel').click(function(e){
		e.preventDefault();
		$('#slide-out').animate({
			left: "0px"
		}, 200);
		var overlay = $('<div/>').addClass('themodal-overlay').prependTo('body');
		overlay.fadeIn();
		$('body').addClass('themodal-lock');
		$('.stat-bar-bg').each(function(e){
			var percentage = Math.floor($(this).attr('data-count') * 100).toString() + '%';
			$(this).find('.stat-bar').delay(200).animate({
				width: percentage
			}, 200);
		});
	});

	$('body').on('click', '.themodal-overlay', function(e){
		$('#slide-out').animate({
			left: "-320px"
		}, 200);
		$('.themodal-overlay').remove();
		$('body').removeClass('themodal-lock');
		$('.stat-bar-bg').each(function(e){
			$('.stat-bar-bg').find('.stat-bar').delay(200).animate({
				width: '0%'
			}, 200);
		});
	});

});