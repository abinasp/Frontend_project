$(document).ready(function() {
    //collapsible data
    $(".collapsible").collapsible();

    //Select Box
    $("select").formSelect();
    // $("select").material_select();

    //Side nav
    $(".sidenav").sidenav();

    //Tabs
    $(".tabs").tabs();

    //Show and Hide Filtter
    $(".filter-trigger").click(function() {
        $(".filtter").toggle();
        // console.log($(".filtter").toggle());
    });

    //Show and Hide hotel Filtter
    $(".filter-hotel").click(function() {
        $(".filtter-items").toggle();
        // console.log($(".filtter").toggle());
    });

    //Date picker;
    $(".datepicker").datepicker();

    //Toggle fare and text
    $(".toggle-text").click(function() {
        $(".show-hide").toggle();
        if ($(".toggle-text").text() == "Show Fare") {
            $(".toggle-text").text("Hide Fare");
        } else {
            $(".toggle-text").text("Show Fare");
        }
    });

    // toggle tab active
    $("ul.tab li").click(function(e) {
        //e.preventDefault();
        $("ul.tab li").removeClass("active");
        $(this).toggleClass("active");
    });

    //flight-details
    // $(".flight-details").removeClass("active");
    $(".fltDetTab").click(function() {
        $(".flight-details").toggleClass("active");

        //$(".hide-filtter").toggleClass("active");
    });

    //toggle base fare
    $(".fare-toggle").click(function(e) {
        //e.preventDefault();
        $("ul.tab li").removeClass("active");
        $(this).toggleClass("active");
        $(".fare-details").toggleClass("active");
    });

    //Filtter Menu
    $(".hide-filtter").removeClass("active");
    $(".filtter-items li").click(function() {
        $(".hide-filtter").removeClass("active");
        $(this)
            .find(".hide-filtter")
            .addClass("active");
        //$(".hide-filtter").toggleClass("active");
    });

    // toggle Filter for Bus
    $(".filtter-head").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        } else {
            $(".filtter-head").removeClass("active");
            $(this).toggleClass("active");
        }
    });

    // toggle Filter for Bus
    $(".baggage01 li").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        } else {
            $(".baggage01 li").removeClass("active");
            $(this).toggleClass("active");
        }
    });
    $(".baggage02 li").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        } else {
            $(".baggage02 li").removeClass("active");
            $(this).toggleClass("active");
        }
    });

    //rooms toggle
    $(".view-btn").click(function(e) {
        e.preventDefault();
        $(".rooms").removeClass("active");
        $(this)
            .parents(".hotel-list")
            .find(".rooms")
            .toggle();
    });
    //DropDown
    $(".dropdown-trigger").dropdown();
    $(".dropdown-btn").dropdown({
        inDuration: 300,
        outDuration: 225,
        hover: true, // Activate on hover
        // belowOrigin: true, // Displays dropdown below the button
        alignment: "right" // Displays dropdown with edge aligned to the left of button
    });
    //Popup
    $("#conf-book").modal();
    $("#send-query").modal();

    //Tooltip
    $(".tooltipped").tooltip();

    //Slider
    $(".carousel.carousel-slider").carousel(
        {
            fullWidth: true,
            padding: 200
        },
        setTimeout(autoplay, 4500)
    );

    function autoplay() {
        $(".carousel").carousel("next");
        setTimeout(autoplay, 4500);
    }

    // Remove menu outside of div
    const $menu = $(".hide-filtter");
    $(document).mouseup(function(e) {
        if (
            !$menu.is(e.target) && // if the target of the click isn't the container...
            $menu.has(e.target).length === 0
        ) {
            // ... nor a descendant of the container
            $menu.removeClass("active");
            $(".filtter-head").removeClass("active");
            //$(".filtter-items li").removeClass("active");
        }
    });

    //Slider Full Width
    $("#lightSlider").lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
    $("#lightSlider02").lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
});
