$( document ).ready(function() {
	// Hide full Text
	$(".expander").hide();
	$(".expander2").hide();
	$(".expander3").hide();
	$(".expander4").hide();
	// Expand
	$( ".readmore" ).click(function() {
		// Toggle :before read more/ contract
		$(this).toggleClass('contract');
		// Animation
		$( ".expander" ).toggle( "fast", function() {
		});
	});
	$( ".readmore2" ).click(function() {
		// Toggle :before read more/ contract
		$(this).toggleClass('contract');
		// Animation
		$( ".expander2" ).toggle( "fast", function() {
		});
	});
	$( ".readmore3" ).click(function() {
		// Toggle :before read more/ contract
		$(this).toggleClass('contract');
		// Animation
		$( ".expander3" ).toggle( "fast", function() {
		});
	});
	$( ".readmore4" ).click(function() {
		// Toggle :before read more/ contract
		$(this).toggleClass('contract');
		// Animation
		$( ".expander4" ).toggle( "fast", function() {
		});
	});
});