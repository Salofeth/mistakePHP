
//返回顶部
$('#w-back-top').click(function () {
	$("html").animate({"scrollTop": 0}, 1000); //IE,FF
	$("body").animate({"scrollTop": 0}, 1000); //Webkit
});

$(window).scroll(function () {
	if ($(document).scrollTop() > 300) {
		$('#w-back-top').removeClass('hide');
	} else {
		$('#w-back-top').addClass('hide');
	}
});


