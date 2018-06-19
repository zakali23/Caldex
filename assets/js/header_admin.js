
//"use strict";

var Dashboard = function () {
    var global = {
        tooltipOptions: {
            placement: "right"
        },
        menuClass: ".c-menu"
    };

    var menuChangeActive = function menuChangeActive(el) {
        var hasSubmenu = $(el).hasClass("has-submenu");
        $(global.menuClass + " .is-active").removeClass("is-active");
        $(el).addClass("is-active");

        // if (hasSubmenu) {
        //     $(el).find("ul").slideDown();
        // }
    };

    var sidebarChangeWidth = function sidebarChangeWidth() {
        var $menuItemsTitle = $("li .menu-item__title");

        $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
        $(".hamburger-toggle").toggleClass("is-opened");

        if ($("body").hasClass("sidebar-is-expanded")) {
            $('[data-toggle="tooltip"]').tooltip("destroy");
        } else {
            $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
        }
    };

    return {
        init: function init() {
            $(".js-hamburger").on("click", sidebarChangeWidth);

            $(".js-menu li").on("click", function (e) {
                menuChangeActive(e.currentTarget);
            });

            $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
        }
    };
}();

Dashboard.init();
//# sourceURL=pen.js

$(document).ready(function()
{
    $("li#GU").click(function() {

        $("#Gestion-Utilisateurs").css({"display": "contents"});
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Materiel").css({"display": "none"});
    });

    $("li#GP").click(function() {

        $("#Gestion-Utilisateurs").css({"display": "none"});
        $("#Gestion-Parc").css({"display": "contents"});
        $("#Gestion-Materiel").css({"display": "none"});
    });

    $("li#GM").click(function() {

        $("#Gestion-Utilisateurs").css({"display": "none"});
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Materiel").css({"display": "contents"});
    });
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        trigger : 'hover',
        html: true,
        content: function(){
            return $('.profil').html();
        }
    });
});