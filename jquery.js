

$(document).ready(function(){
	$("#iphone").mouseenter(function(){
		$(this).addClass("highlight1");
	});
	$("#iphone").mouseleave(function(){
		$(this).removeClass("highlight1");
	});
});

$(document).ready(function(){
	$("#screen").mouseenter(function(){
		$(this).addClass("highlight2");
	});
	$("#screen").mouseleave(function(){
		$(this).removeClass("highlight2");
	});
});

$(document).ready(function(){
	$("#ipad").mouseenter(function(){
		$(this).addClass("highlight1");
	});
	$("#ipad").mouseleave(function(){
		$(this).removeClass("highlight1");
	});
});