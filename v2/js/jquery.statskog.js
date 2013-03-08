$(document).ready(function() {

    //midtstill top
    //$("#top-container")


    $(".sub-menu").hide();
    $("#main-menu li").on("mouseenter", function(e) {
        $elm = $(this);
        
        $elm.find(".sub-menu").stop().show().animate({
            opacity: 1
        }, 500, function() {
        
        }); 
    }).on("mouseleave", function(e) {
        $elm = $(this);
        $elm.find(".sub-menu").stop().animate({
            opacity: 0
        }, 200, function() {
            $(this).hide()
        }); 
    }).on("click", function(e) {
        // l("> klikk > "+$(this).parent().children().length);
        if ($(this).children().length == 1) {
            //l("> no sub");
        }
    })

    var log = $("#log");
    function l(str, type) {
        //log.append("> "+str+"<br>");
    }
});