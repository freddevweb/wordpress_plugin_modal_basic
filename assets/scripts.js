jQuery( document ).ready( function( $ ) {

	$(".modalBlock").css( "display", "block" );
	// $(".modalBlock").fadeIn(900);

	$(".close").click( function(){
		$(".modalBlock").css( "display", "none" );
		// $(".modalBlock").fadeOut(500);
	} );

	$(window).click( function(){
		$(".modalBlock").css( "display", "none" );
		// $(".modalBlock").fadeOut(500);
	} );

	
});