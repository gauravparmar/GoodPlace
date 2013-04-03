(function() {
	var el = document.getElementById('home-wrapper');
	el.style.background = "url("+_bloginfo.template_url+"/imgs/bg-1.jpg)";

	var _ = $('#home-wrapper');
	var cats = $(".category", _);
	var ctrl = $('#image-ctrl')
	$("#image-desc", _).mouseenter(function() {
		cats.hide();
		ctrl.show();
	});
	$("#banner", _).mouseenter(function() {
		cats.show();
		ctrl.hide();
	});

}) ()
