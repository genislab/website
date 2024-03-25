(function ($) {
    "use strict";
    $.fn.dolyAccessibleDropDown = function () {
		var el = $(this);

		$("a", el).focus(function() {
		    $(this).parents("li").addClass("hover");
		}).blur(function() {
		    $(this).parents("li").removeClass("hover");
		});
	}

    $(".menu-close").on('click', function(){
       $("a.slicknav_btn").removeClass("slicknav_open");
       $(".slicknav_nav").css("display", "none");
    });

    jQuery(document).ready(function($){
    	$("#primary-menu").dolyAccessibleDropDown();
        // Mobile Menu
        $("#primary-menu").slicknav({
            'allowParentLinks': true,
            'prependTo': '.doly-responsive-menu',
            'nestedParentLinks': false,
            'closeOnClick': true,
        });

        $(".masonry-post").masonry({
            horizontalOrder: true,
        });
        
        $(".menu-close").focus(function() {
            $("a.slicknav_open").focus();
        });
    });
}(jQuery)); 