function Content(){
	console.log('Content');
	$('.content').load('pages/content.php');
}
function Menu(){
	console.log('Menu');
}
function Specials(){
	console.log('Specials');
}
function Stats(){
	console.log('Stats');
}
function Images(){
	console.log('Images');
}


function createMenuItem(){
	console.log('Create Menu Item');
	LoadPage('menu/create', 'menu_content');
}
function editMenuItems(){
	console.log('Edit Menu Items');
	LoadPage('menu/edit', 'menu_content');
}