$(function() {

	// SCROLL

		$(window).scroll(function () {
		    if ($(window).scrollTop() >= 100) {
		        $('#header').addClass('scroll');
		    } else if ($(window).scrollTop() < 100) {
		        $('#header').removeClass('scroll');
		    }
		});

	// MAP

		proccessMarkers = function(){
		    jQuery('div.place').each(function(){
		        var item       = jQuery(this).data();
		        var marker     = 'map'+item.ident;
		        var infowindow = 'info';

		        obj[marker] =   new google.maps.Marker({
		                            position: new google.maps.LatLng( item.lat, item.lng),
		                            map: map,
		                            title: item.title,
		                            icon: templateURL+'images/'+item.cat+'.png',
		                            type: item.cat
		                        });

		        info[infowindow+marker] =   new google.maps.InfoWindow({
		                                        content: '<h4 class="text-center" style="color: #333;">'+item.title+'</h4>'
		                                    });

		        google.maps.event.addListener(obj[marker], "click", function() {
		            info[infowindow+marker].open(map, obj[marker]);
		        });

		        if (!markerGroups[item.cat]) markerGroups[item.cat] = [];
		        markerGroups[item.cat].push(obj[marker]);
		    });
		};

		if($('#map').length > 0){
	        google.maps.event.addDomListener(window, 'load', init);
	    }

	    function init(){
	        var isDraggable = $(document).width() > 480 ? true : false;

	        var objInfo = $('#map');

	        var mapOptions = {
	            draggable: isDraggable,
	            center: new google.maps.LatLng(objInfo.data('lat'), objInfo.data('lng')),
	            zoom: 16,
	            zoomControl: false,
	            disableDoubleClickZoom: isDraggable,
	            mapTypeControl: false,
	            scaleControl: false,
	            scrollwheel: false,
	            panControl: isDraggable,
	            streetViewControl: false,
	            overviewMapControl: false,
	            overviewMapControlOptions: {
	                opened: false,
	            },
	            mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var mapElement = document.getElementById('map');
	        map        = new google.maps.Map(mapElement, mapOptions);
	        obj        = {};
	        info       = {};
	        markerGroups = {
	          "lazer": [],
	          "gastronomia": [],
	          "educacao": [],
	          "saude": [],
	          "comodidade": [],
	        };

	        var directionsService = new google.maps.DirectionsService;
	        var directionsDisplay = new google.maps.DirectionsRenderer;

	        directionsDisplay.setMap(map);

	        var locations = [
	            [objInfo.data('title'), objInfo.data('description'), objInfo.data('telephone'), objInfo.data('email'), objInfo.data('site'), objInfo.data('lat'), objInfo.data('lng'), templateURL+'images/icn-pino.png']
	        ];
	        for (i = 0; i < locations.length; i++){
	            if (locations[i][1] == undefined){ description = '';} else { description = locations[i][1];}
	            if (locations[i][2] == undefined){ telephone = '';} else { telephone = locations[i][2];}
	            if (locations[i][3] == undefined){ email = '';} else { email = locations[i][3];}
	            if (locations[i][4] == undefined){ web = '';} else { web = locations[i][4];}
	            if (locations[i][7] == undefined){ markericon = '';} else { markericon = locations[i][7];}
	            marker = new google.maps.Marker({
	                icon: markericon,
	                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
	                map: map,
	                title: locations[i][0],
	                desc: description,
	                tel: telephone,
	                email: email,
	                web: web
	            });
	            link = '';
	        }

	        proccessMarkers();
	    }


	// ==========================
	// == General Functions

		/* Background Image */
		$('[data-bgi]').each(function() {
			var bgi = $(this).data('bgi');
			$(this).css('background-image', 'url(' + bgi + ')');
			$(this).removeAttr('data-bgi');
		});

		/* WOW */
		new WOW().init();

		/* Anchor Links */
		$('.anchor').click(function() {
			var target = $(this).attr('anchor');
			$('html, body').animate({
				scrollTop: $('#' + target).offset().top - 100
			}, 800);
		});

		/* appear */

		$('.tc-appear').appear();
		$(document).on('appear', '.tc-appear', function(e, $affected) {

			$('.progress-bar').each(function() {
				var tamanho = $(this).attr('aria-valuenow');
				$(this).css('width', tamanho + '%');
			});

		});

	// TABS
	
		$('ul.tabs li').click(function(){
			var tab_id = $(this).data('tab');

			$(this).parent().find('li').removeClass('current');
			$(this).addClass('current');

			$(this).parents('.tabela').find('.tab-content').removeClass('current');
			$(this).parents('.tabela').find('.tab-content[data-tab="' + tab_id + '"]').addClass('current');

			setTimeout(function() {
				setup_accordion_items();
			}, 500);


			// if (tab_id == 1) {
			// 	$('.comments').addClass('active');
			// } else {
			// 	$('.comments').removeClass('active');
			// }
		});

	/* Accordion */
	
		function setup_accordion_items() {
		    $('.el-accordion .item').each(function() {
		        // Define height attribute
		        var height = $(this).find('.wrapper-accordion').outerHeight();
		        $(this).attr('data-height', height);

		        // Active item
		        if ($(this).hasClass('active')) {
		            $(this).find('.content-accordion').height(height);
		        }
		    });
		}
		setup_accordion_items();

	    $('.el-accordion .item header a').click(function() {
		    // Define main variables
		    var items  = $(this).parent().parent().parent().children('.item'),
		        parent = $(this).parent().parent(),
		        height = parent.data('height');

		        console.log(height);

		    // Collapse other items
		    items.children('.content-accordion').height('0');

		    // Expand or collapse this item
		    if (parent.hasClass('active')) {
		        items.removeClass('active');
		        parent.removeClass('active');
		        parent.children('.content-accordion').height('0');
		    } else {
		        items.removeClass('active');
		        parent.addClass('active');
		        parent.children('.content-accordion').height(height);
		    }
		});

		$('.el-accordion-2 .item').each(function() {
	        // Define height attribute
	        var heightt = $(this).find('.wrapper-accordion-2').outerHeight();
	        $(this).attr('data-height', heightt);

	        // Active item
	        if ($(this).hasClass('active')) {
	            $(this).find('.content-accordion-2').height(heightt);
	        }
	    });

	    $('.el-accordion-2 .item header a').click(function() {
		    // Define main variables
		    var itemss  = $(this).parent().parent().parent().children('.item'),
		        parentt = $(this).parent().parent(),
		        heightt = parent.data('height');

		        console.log(heightt);

		    // Collapse other items
		    itemss.children('.content-accordion-2').height('0');

		    // Expand or collapse this item
		    if (parentt.hasClass('active')) {
		        itemss.removeClass('active');
		        parentt.removeClass('active');
		        parentt.children('.content-accordion-2').height('0');
		    } else {
		        itemss.removeClass('active');
		        parentt.addClass('active');
		        parentt.children('.content-accordion-2').height(heightt);
		    }
		});

		$('.popup_toggler').click(function() {
	    	$('#myPopup').addClass('active');
	    });
	    $('.popuptext .close_popup').click(function() {
	    	$(this).parents('.popuptext').removeClass('active');
		    $('iframe').each(function(){
	            $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');   
	        });
	    });
		$('.popuptext').click(function(e) {
	        var wrapper = $(this).children('.wrapper');
	        if (!wrapper.is(e.target) && wrapper.has(e.target).length === 0) {
	           $(this).removeClass('active');
	        };
	        $('iframe').each(function(){
	            $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');   
	        });
		});

	// SLICK INTERNA EMPREENDIMENTOS

		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			arrows: true,
			fade: true,
			asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			// dots: true,
			arrows: false,
			centerMode: true,
			autoplay: true,
			focusOnSelect: true
		});

	// ===========================
	// == Masks & Characters Validation

		/* Phone Function */
	    var phoneMask = function(val) {
	    	return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	    },
	    phoneMaskOptions = {
	        onKeyPress: function(val, e, field, options) {
	            field.mask(phoneMask.apply({}, arguments), options);
	        }
	    };

	    /* Masks */
	    $('.t-phone').mask(phoneMask, phoneMaskOptions);
	    $('.t-cpf').mask('000.000.000-00');
	    $('.t-date').mask('00/00/0000');

	    /* Validation */
	    $('.t-phone').blur(function() {
	    	var charcount = $(this).val().length;
	    	if (charcount < 14) {
	    		$(this).addClass('error');
	    	} else {
	    		$(this).removeClass('error');
	    	}
	    });
	    $('.t-date').blur(function() {
	    	var charcount = $(this).val().length;
	    	if (charcount < 10) {
	    		$(this).addClass('error');
	    	} else {
	    		$(this).removeClass('error');
	    	}
	    });

	    $('#slider .wrapper .slick').each(function(){
	    	var slick_dots = $(this).parents('.wrapper').find('.tr-slick-dots .dots-wrapper');
		    $(this).slick({
		    	fade: true,
		    	dots: true,
		    	infinite: true,
		    	arrows: false,
		    	appendDots: slick_dots,
		    });
	    });
	    $('#slider .wrapper .tr-slick-arrows button').click(function() {
	    	var slick = $(this).parents('#slider').find('.slick');
	    	if ($(this).hasClass('slick-next')) {
	    		slick.slick('slickNext');
	    	} else {
	    		slick.slick('slickPrev');
	    	}
	    })

	    $('.grid').masonry({
		  // options
		  itemSelector: '.grid-item',
		  columnWidth: 370
		});

		$('section#empreendimentos .grid .grid-item .content .overlay').each(function() {
			var color = $(this).data('color');
			$(this).css('background-color', color);
		});

		// == Functions

			// $('.menu__list').click(function(e){

			//     e.preventDefault();

			//     var target = $(this).attr('href');

			//     $('html, body').animate({
			//         scrollTop: $(target).offset().top
			//     }, 800);
			// });

		/* Mobile Navigation */
		
			$('.mobile-navigation-toggler a').click(function() {
				$('.mobile-navigation').addClass('active');
			});
			$('.mobile-navigation').click(function(e) {
				var wrapper = $(this).children('.wrapper');
				if (!wrapper.is(e.target) && wrapper.has(e.target).length === 0) {
			        $(this).removeClass('active');
			    }
			});
        
});