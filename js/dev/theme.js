// fitvids to make all videos full width http://fitvidsjs.com/  
(function($) {
	"use strict";
	$(function() {
		$('.the-content').fitVids();
	});


	var header_image = $('.header_image');

	header_image.css('background-image', 'url(' + header_image.find('img').attr('src') + ')').find('img').hide();

	$('.menu-link').on('click', function() {
		$(this).parent('.push-menu').toggleClass('open');
		$('header').toggleClass('open');
	});


	/////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////
	//						NTH-CHILD TESTER					   //
	/////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////
	var testercontainer = $('.tester-container');
	testercontainer.find('article').before('ARTICLE:');
	testercontainer.find('h3').before('H3:');
	testercontainer.find('p').before('P:');
	testercontainer.find('img').before('IMG:');
	$('#nth-value, #selector-value, #pseudo-class-value, #container-value').bind("change keyup blur focus", function() {
		$('.tester-container').children().removeClass('selected').children().removeClass('selected').children().removeClass('selected');
		var nthValue = $('#nth-value').val(),
			selectorValue = $('#selector-value option:selected').val(),
			containerValue = $('#container-value option:selected').val(),
			pseudoClassValue = $('#pseudo-class-value option:selected').val();
			if (containerValue == 'div.tester-container article ') {
				$("#selector-value option#article").attr('disabled','disabled')
        		.siblings().removeAttr('disabled');
			} else {
				$("#selector-value option#article").removeAttr('disabled');
			}
		console.log($(containerValue+selectorValue+':'+pseudoClassValue+'('+nthValue+')'));
		$(containerValue+selectorValue+':'+pseudoClassValue+'('+nthValue+')').addClass('selected');
	});
	$('.tester-container article:nth-child(2n+1)').addClass('selected');




	///////////////////
	//  PARALLASSI  ///
	///////////////////

	var win = $(window);
	$('[data-type="parallax_fade"]').each(function(){

	    //  Dichiarazione delle variabili
	    var elm = $(this),
	    		elm_height = elm.height(),
	    		opacity = 0;

	    //  Gestione dell'evento on scroll        
	    win.on('scroll', function() {  
	      // console.log(elm.offset().top);  

	      //  Trasformo il valore di "speed"  
	      opacity = ( elm_height-win.scrollTop() ) / elm_height;

	      // opacity = elm_height/win.scrollTop()
	      if (opacity >= 0) {
	      	elm.css('opacity', opacity);
	      };

	    }); // Fine Window scroll        
	  }); // Fine each elements 

	$('[data-type="vertical_parallax"]').each(function(){



	    //  Dichiarazione delle variabili
	    var elm = $(this); 
	    //  Trasformo il valore di "speed"               
	      var position = -( (win.scrollTop()-elm.offset().top) * elm.data('speed'))/10,

	      //  Assemblo la stringa per la proprietà CSS
	          vertical_translate = 'translate3d(0,' + position + 'px, 0px)'; 

	      //  Assegno all'elemento la nuova posizione
	      elm.css({
	          WebkitTransform : vertical_translate,
	          MoxTransform : vertical_translate,
	          transform : vertical_translate
	      });

	    //  Gestione dell'evento on scroll        
	    win.on('scroll', function() {  
	      // console.log(elm.offset().top);  

	      //  Trasformo il valore di "speed"               
	      var position = -( (win.scrollTop()-elm.offset().top) * elm.data('speed'))/10,

	      //  Assemblo la stringa per la proprietà CSS
	          vertical_translate = 'translate3d(0,' + position + 'px, 0px)'; 

	      //  Assegno all'elemento la nuova posizione
	      elm.css({
	          WebkitTransform : vertical_translate,
	          MoxTransform : vertical_translate,
	          transform : vertical_translate
	      });
	    }); // Fine Window scroll        
	  }); // Fine each elements 

}(jQuery));