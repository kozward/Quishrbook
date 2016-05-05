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
		var overlay = $('<div/>').addClass('thepanel-overlay').prependTo('body');
		overlay.fadeIn();
		$('body').addClass('themodal-lock');
		$('.stat-bar-bg').each(function(e){
			var percentage = Math.floor($(this).attr('data-count') * 100).toString() + '%';
			$(this).find('.stat-bar').delay(200).animate({
				width: percentage
			}, 200);
		});
	});

	$('body').on('click', '.thepanel-overlay', function(e){
		$('#slide-out').animate({
			left: "-320px"
		}, 200);
		$('.thepanel-overlay').remove();
		$('body').removeClass('themodal-lock');
		$('.stat-bar-bg').each(function(e){
			$('.stat-bar-bg').find('.stat-bar').delay(200).animate({
				width: '0%'
			}, 200);
		});
	});

	$('#add-new-coffee').click(function(e){
		if ($(this).hasClass('become-cancel')) {
			$('.modal-footer').animate({
				bottom: '-64px'
			}, 200);
			$('#add-coffee-panel').fadeOut();
			$('body').removeClass('themodal-lock');
			$('#add-new-coffee').removeClass('become-cancel');
		} else {
			e.preventDefault();
			$('#add-coffee-panel').fadeIn().find('.modal-footer').delay(200).animate({
				bottom: '0'
			}, 200);
			$('body').addClass('themodal-lock');
			$(this).addClass('become-cancel');
		}
	});

	$('#cancel-new').click(function(e){
		$('.modal-footer').animate({
				bottom: '-64px'
			}, 200);
		$('#add-coffee-panel').fadeOut();
		$('body').removeClass('themodal-lock');
		$('#add-new-coffee').removeClass('become-cancel');
	});

});