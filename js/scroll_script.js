$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");
	var pos = $(this).getBoundingClientRect();
	if (the_id === '#') {
		return;
	}
	$('html, body').animate({
		window.scrollTo($(pos),0);
	}, 'slow');
	return false;
});
