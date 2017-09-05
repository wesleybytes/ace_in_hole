	$(document).ready(function(){		
        $('body').removeClass('jsOff').addClass('jsOn');
        $('.hamburger').on('click', function() {            
        $('.menu').toggleClass('open');
	});
