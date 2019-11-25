(function($){

	if ( typeof fontsToUse != 'undefined' ) {		
		
		WebFontConfig = {
		    google: { families: [ fontsToUse ] }
		};
		
	    var wf = document.createElement('script');
	    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
		
	}

})(jQuery);