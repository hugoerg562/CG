//Hugo Rincon
//Arena JS 


    //Cards Animation
    $(document).ready(function() {
      	$('.player_card').hover(function() {
      		  $(this).animate({ 'top': '-=30px' }, 200);
      	}, function() { 
      	    $(this).animate({ 'top': '+=30px' }, 200);
      	});
      	
    });
