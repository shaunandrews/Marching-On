var onMyOwn;
(function($) {

	onMyOwn = {
		init: function() {
			$( '#main' ).on( 'click', '.entry-nav-prev', function() {
				var nextEntry = $(this).closest( '.post' ).prev( '.post' );
				console.log( 'Next post please!', nextEntry );
				$( 'html, body' ).animate( {
					scrollTop: nextEntry.offset().top
				}, 200 );
			} );

			$( '#main' ).on( 'click', '.entry-nav-next', function() {
				var nextEntry = $(this).closest( '.post' ).next( '.post' );
				console.log( 'Next post please!', nextEntry );
				$( 'html, body' ).animate( {
					scrollTop: nextEntry.offset().top
				}, 200 );
			} );
		},
	}

	$(document).ready(function($){ onMyOwn.init(); });

})(jQuery);