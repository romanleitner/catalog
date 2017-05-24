(function($) {

	// Nr. of licences select box
	/*****************************************************************************/
  $( ".select-users .increment" ).click( function() {
		
		var maxUsers = findMaxValue( $('.rangeified.select-users') );
		
		if( parseInt($( ".select-users .display" ).html()) < maxUsers ){
			$( ".select-users .display" ).html( parseInt($( ".select-users .display" ).html()) + 1 );
		}
		
		if( parseInt($( ".select-users .display" ).html()) == maxUsers ){
		 	$( ".select-users .increment" ).addClass('inactive');
		}
		
		//Remove class inactive from -
		if( $( ".select-users .decrement" ).hasClass('inactive') ){
			$( ".select-users .decrement" ).removeClass('inactive');
		}
		
    triggerAjax();		
	});
	
	
	
	$( ".select-users .decrement" ).click( function() {
		if( parseInt($( ".select-users .display" ).html()) == 1 ){
			return false;
		}
		
		$( ".select-users .display" ).html( parseInt($( ".select-users .display" ).html()) - 1 );
		
		//Remove class inactive from +
		if( $( ".select-users .increment" ).hasClass('inactive') ){
			$( ".select-users .increment" ).removeClass('inactive');
		}
		
		if( parseInt($( ".select-users .display" ).html()) == 1 ){
			$( ".select-users .decrement" ).addClass('inactive');
		}
		
    triggerAjax();		
	});
	
	
	// nr. of years select box
	/*****************************************************************************/
	$( ".select-years .increment" ).click( function() {
		
		var maxYears = findMaxValue( $('.rangeified.select-years') );
		
		if( parseInt($( ".select-years .display" ).html()) < maxYears ){
			$( ".select-years .display" ).html( parseInt($( ".select-years .display" ).html()) + 1 );
		}
		
		if( parseInt($( ".select-years .display" ).html()) == maxYears ){
		 	$( ".select-years .increment" ).addClass('inactive');
		}
		
		//Remove class inactive from -
		if( $( ".select-years .decrement" ).hasClass('inactive') ){
			$( ".select-years .decrement" ).removeClass('inactive');
		}

    triggerAjax();		
	});
	
	
	
	$( ".select-years .decrement" ).click( function() {
		if( parseInt($( ".select-years .display" ).html()) == 1 ){
			return false;
		}
		
		$( ".select-years .display" ).html( parseInt($( ".select-years .display" ).html()) - 1 );
		
		//Remove class inactive from +
		if( $( ".select-years .increment" ).hasClass('inactive') ){
			$( ".select-years .increment" ).removeClass('inactive');
		}
		
		if( parseInt($( ".select-years .display" ).html()) == 1 ){
			$( ".select-years .decrement" ).addClass('inactive');
		}

    triggerAjax();		
	});
	
	function triggerAjax(){
		// Request price
		$.post( currentUrl, '&eID=esetcatalog&tx_catalog_eset%5Buid%5D=1&tx_catalog_eset%5Busers%5D='+$( ".select-users .display" ).html()+'&tx_catalog_eset%5Byears%5D='+$( ".select-years .display" ).html(), function( data ) {
			console.log(data);
			$('.price .amount').html(data.amount);
			$('.price .cents').html(data.cents);
		}, 'json' );	
	}
	
	function findMaxValue(element) {
    var maxValue = undefined;
    $('option', element).each(function() {
        var val = $(this).attr('value');
        
        val = parseInt(val, 10);
        if (maxValue === undefined || maxValue < val) {
            maxValue = val;
        }
    });

    return maxValue;
	}
})(jQuery);