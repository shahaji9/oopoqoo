( function( $ ) {

	$('#current-openings-section ul.job-listing li').on('click', 'a', function(e) {
        
        e.preventDefault();
        $('#current-opening-jd').html("");
        $('.current-opening-wrapper .ajax-loader').show('fast');
		$('#current-openings-section ul.job-listing li a').removeClass('active');
		$(this).addClass('active');

        $('html, body').animate({
            scrollTop: $('#current-openings-section #current-opening-jd').offset().top - 80
        }, 800);

        var job_title = $(this).text();
        $('#current-openings-apply-now-form #job-title').val(job_title);
                
		$.ajax({
            type: 'POST',
            url: my_ajax_object.ajax_url,
            dataType: 'html',
            data: {
				action: 'filter_jobs',
				postid: $(this).data('id'),
			},
			success: function(result) {
                $('.current-opening-wrapper .ajax-loader').hide('fast');
				$('#current-opening-jd').html(result);
			}
		});
	});

    /*Handles resume file change*/
    // $('#current-openings-apply-now-form').on('change', 'input[type=file]', function () {
    //     var str = "";
    //     var str = $(this).val().replace(/C:\\fakepath\\/i, '');
    //     $(this).parents('#fileUpload').find('.cv-name').text(str);
    //     console.log('Hello');
    // }).change();

    /** change value here to adjust parallax level */
    var parallax = -0.3;
    var $bg_images = $(".parallax-banner-scroll, .parallax-content-scroll");
    var offset_tops = [];
    $bg_images.each(function(i, el) {
        offset_tops.push($(el).offset().top);
    });

    $(window).on('scroll resize', function () {

        var $nav = $("#masthead");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

        var dy = $(this).scrollTop();
        $bg_images.each(function(i, el) {
            var ot = offset_tops[i];
            $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");            
        });
    });

    $(window).trigger('scroll');

    $('#current-openings-section').on('click', '.apply-now-btn', function(e){
        var currect_selected_opening = $('.job-listing a.active').text();
        $('#job-title-popup').text(currect_selected_opening);		
		$('#current-openings-apply-now-form #job-title').val(currect_selected_opening);
        $('#current-openings-apply-now-form').modal('show');
    });
	
	$('.home nav#site-navigation').on('click', '.navbar-toggler', function () {
		if($('#primary-menu-wrap').hasClass('show')){
			$('.home nav#site-navigation').css('background', 'transparent');
		}else{
			$('.home nav#site-navigation').css('background', '#0e0e0e');
		}
	});

    /*****************************************
     *  
     *  Parallax effects
     *   
     **************************************/        
    // var $fwindow = $(window);

    // $('[data-type="background"]').each(function () {
    //     var $backgroundObj = $(this);
        
    //     $fwindow.on('scroll resize', function () {
    //         var yPos = -($fwindow.scrollTop() / $backgroundObj.data('speed'));
        
    //         var coords = '50% ' + yPos + 'px';

    //         // Move the background
    //         $backgroundObj.css({backgroundPosition: coords});
    //     });
    // });        

    // $fwindow.trigger('scroll');

} )( jQuery );