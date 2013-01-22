var chartCount = 0;
var chartArr = [];
var cloneState = false;

(function($) {

	//default settings
	var defaultSettings = {
		"div": this,
		"pop-container": "#dialog-wrapper",
		"mask-container": '',
		"width": 800,
		"height": 400,
		"spinner": true
	};

	var methods = {
		init: function(options) {
			console.log("init");
		},
		createGraph: function(options) {
			console.log("createGraph");
		},
		pop: function(options) {
			var winH = $(window).height();
			var winW = $(window).width();
			defaultSettings["pop-container"].css('position', 'fixed');
			//defaultSettings.pop-container.css('top',  winH/2-settings.height/2);
			//defaultSettings.pop-container.css('left', winW/2-settings.width/2);
			console.log("pop");
		}
	};



	$.fn.chartpop = function(options, settings) {
		if (methods[options]) {
			console.log("chartpop "+options);
			
		} else if (typeof options === 'object' || !options) {
			console.log("settings recived");
		} else {
			console.log("error - ingen metode funnet");
		}

		defaultSettings = $.extend({}, defaultSettings, settings || {});

		for (var i in defaultSettings) {
			//console.log(i+" > "+defaultSettings[i]);
		}
	};
})(jQuery);