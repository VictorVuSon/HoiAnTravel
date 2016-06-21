$(document).ready(function(){
	$('#menu-page li').hover(function(){
		//khi di chuot vao
		$(this).find('a').css({visibility:'visible'}).show(400);
	},function(){
		//khi di chuot ra
	})
})