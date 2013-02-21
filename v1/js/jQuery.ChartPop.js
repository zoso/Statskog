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
		"mask-opacity": 0.9,
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
			return html;
		},
		pop: function(options) {
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
			
			defaultSettings["hc"].chart.renderTo = 'dialog';
			defaultSettings["mask-container"].fadeIn(200);   
			defaultSettings["mask-container"].fadeTo("slow", defaultSettings["mask-opacity"]);
			defaultSettings["mask-container"].css({'width': maskWidth,'height': maskHeight});
			defaultSettings["mask-container"].css("background-color", defaultSettings["mask-color"]);

			var winH = $(window).height();
			var winW = $(window).width();
			defaultSettings["pop-container"].css('top',  winH/2-defaultSettings["pop-height"]/2);
			defaultSettings["pop-container"].css('left', winW/2-defaultSettings["pop-width"]/2);
			defaultSettings["pop-container"].css({'width': defaultSettings["pop-width"], 'height': defaultSettings["pop-height"]});
			
			if (defaultSettings["spinner"] == true) 
				$("#dialog").html("<div style=\"width: 220px; height: 19px; margin: 0 auto; margin-top: 200px;\"><img src=\"img/spinner_2.gif\" /></div>");
			var hc = {};
			defaultSettings["pop-container"].fadeIn(500, function() {
				hc = new Highcharts.Chart(defaultSettings["hc"]);
				hc.setSize(defaultSettings["pop-width"], defaultSettings["pop-height"]);
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
					hc = null;
					$("#dialog").html("");
				});
				defaultSettings["mask-container"].hide();
			}
		},
		get_settings: function() {
			for (var i in defaultSettings) {
				console.log("> "+i+" > "+defaultSettings[i]);
			}
		}
	}

	/* Usage:
		wrap a div around the div containing the highchart object
		ex: $(div).createpop('item', settings) -> return:
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
			++
	*/

	$.fn.chartpop = function(options, settings) {
		defaultSettings = $.extend({}, defaultSettings, settings || {});
		if (methods[options]) {
			switch(options) {
				case "init":
					return this.html(methods[options]());
					break;
				case "pop":
					methods[options]();
					break;
				case "get_settings":
					methods[options]();
					break;
				default:
					break;
			}
		} else if (typeof options === 'object' || !options) {
			console.log("settings recived");
		} else {
			console.log("error - ingen metode funnet ("+options+")");
		}
	};
})(jQuery);