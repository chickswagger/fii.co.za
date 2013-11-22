(function($){
    
 Drupal.behaviors.noneclickable = {
  attach: function (context, settings) {    
	   
  noneclickable(); 

  }}
  }    

)(jQuery);
function noneclickable() {

	jQuery('.no-link').click(function(e) {

	
		var aBetterEventObject = jQuery.Event(e);
		aBetterEventObject.preventDefault();
		aBetterEventObject.isDefaultPrevented();
		aBetterEventObject.stopPropagation();
		aBetterEventObject.isPropagationStopped();
		aBetterEventObject.stopImmediatePropagation();
		aBetterEventObject.isImmediatePropagationStopped();
		
		return false;
	});
} 