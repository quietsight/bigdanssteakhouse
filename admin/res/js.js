function startSpin(){
	var opts = {
		lines: 12, // The number of lines to draw
		length: 11, // The length of each line
		width: 3, // The line thickness
		radius: 7, // The radius of the inner circle
		color: '#000', // #rbg or #rrggbb
		speed: 1, // Rounds per second
		trail: 100, // Afterglow percentage
		shadow: false // Whether to render a shadow
	};
	var target = document.getElementById('foo');
	var spinner = new Spinner(opts).spin(target);
}

function LoadPage(title, inDiv){
	inDiv = inDiv || 'content';
	var str = "Loading " + title;
	console.log(str);
	$('.'+inDiv).load('pages/'+title+'.php');
}