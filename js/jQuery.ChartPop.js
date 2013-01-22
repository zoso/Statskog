var chartCount = 0;
var chartArr = [];
var cloneState = false;

(function($) {

	//default settings
	var defaultSettings = {
		"div": this,
		"width": 300,
		"height": 300,
		"graphID": "graphID",
		"graphNr": 1,
		"pop-container": $("#dialog-wrapper"),
		"mask-container": '',
		"mask-color": "#333",
		"mask-opacity": 0.5,
		"pop-width": 800,
		"pop-height": 400,
		"spinner": true
	};

	var methods = {
		init: function(options) {
			var html = "<div class=\"chart-wrapper\" style=\"width: "+defaultSettings.width+"px; height:"+defaultSettings.height+"px;\">";
			html += "<div id=\""+defaultSettings.graphID+"\" class=\"loading\">-loading-</div>";
			html += "<div class=\"pop-chart\"><a href=\"#\" data-id=\""+defaultSettings.graphNr+"\" class=\"dialog-open icon-zoom-in\"></a></div></div>";
			html += "<div class=\"spacer\">&nbsp;</div>";
			//console.log(html);
			return html;
		},
		creategraph: function(options) {
			console.log("method create graph");
		},
		pop: function(options) {
			//console.log(" POP "+defaultSettings.width);
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
			defaultSettings["mask-container"].fadeIn(200);   
			defaultSettings["mask-container"].fadeTo("slow", defaultSettings["mask-opacity"]);
			defaultSettings["mask-container"].css({'width': maskWidth,'height': maskHeight});
			defaultSettings["mask-container"].css("background-color", defaultSettings["mask-color"]);

			var winH = $(window).height();
			var winW = $(window).width();
			defaultSettings["pop-container"].css('top',  winH/2-defaultSettings["pop-height"]/2);
			defaultSettings["pop-container"].css('left', winW/2-defaultSettings["pop-width"]/2);
			defaultSettings["pop-container"].css({'width': defaultSettings["pop-width"], 'height': defaultSettings["pop-height"]});
			defaultSettings["pop-container"].fadeIn(500, function() {

			});

			//hide open-icon
			//defaultSettings["div"].siblings().hide();
		
			//make mask clickable
			defaultSettings["mask-container"].click(onClick);
			
			//make close btn clickable
			$("a.dialog-close").on("click", onClick);
			
			//make ESC-key close the graph
			$(document).keyup(function(e) {
				if (e.keyCode == 27) { 
					onClick(e);
				}
			});
			
			function onClick(e) {
				e.preventDefault();
				
				//hide dialog and mask
				defaultSettings["pop-container"].fadeOut(100, function() {
					//show open-icon
					//settings.div.siblings().show();
					//defaultSettings["pop-container"].html('');
				});
				defaultSettings["mask-container"].hide();
			}
		}
	}

	/*
		$(divContainer).append("<div class=\"chart-wrapper\" style=\"width: "+w+"px; height:"+h+"px;\">
		<div id=\""+graphID+"\" class=\"loading\">-loading-</div>
		<div class=\"pop-chart\"><a href=\"#\" data-id=\""+chartCount+"\" class=\"dialog-open icon-zoom-in\"></a></div>
		</div><div class=\"spacer\">&nbsp;</div>");
	*/

	/*var methods = {
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
	};*/

	/* Usage:
		wrap a div around the div containing the highchart object
		ex:
		<div id="chart-wrapper">
			<div id="graphID-container">highchart object</div>
			<div class="pop-chart">creates a magnifier icon <a href="#">#</a></div>
		</div>
		<div id="spacer">give the chart some space</div>

		Plugin functions:
		- create chart container
		- open the chart in a modal view
		- set various settings:
			- mask on/off
			- height and width of modal window
			- clone the highchart graph or create a new instance
			- turn loading animation on/off
	*/






	$.fn.chartpop = function(options, settings) {
		defaultSettings = $.extend({}, defaultSettings, settings || {});
		if (methods[options]) {
			switch(options) {
				case "init":
					return this.html(methods[options].apply(settings));
					break;
				case "pop":
					console.log("POP");
					methods[options].apply(settings);
					break;
				default:
					console.log("---- error - no method");
					break;
			}
			
			

		} else if (typeof options === 'object' || !options) {
			console.log("settings recived");
		} else {
			console.log("error - ingen metode funnet");
		}

		

		for (var i in defaultSettings) {
			//console.log(i+" > "+defaultSettings[i]);
		}
	};
})(jQuery);