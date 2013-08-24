function expand(count, title, desc){
	title = title || '';
	desc = desc || '';
	console.log('Enlarging Pic #'+count);
	$.prettyPhoto.open('res/img/h_pics/restaurant'+count+".png",title,desc);
}


// Tracks scrolling for them menu bar navigation
$(window).scroll(function(e){ 
	console.log('scrolling');
	$el = $('.floatingNav'); 
	if ($(this).scrollTop() > 330 && $el.css('position') != 'fixed'){ 
		$('.floatingNav').css({'position': 'fixed', 'top': '0px'}); 
	}
	if ($(this).scrollTop() < 330 && $el.css('position') == 'fixed'){ 
		$('.floatingNav').css({'position': 'absolute', 'top': '330px'}); 
	} 
});

function linkTo(link){
	window.location = link;
}