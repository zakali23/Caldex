
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

    $("li#MC").click(function() {

        $("#Utilisateurs").css({"display": "none"});
        $("#Mes-Consos").show();
        $("#GestionConsommations").show();
        $("#ConsultParc").css({"display": "none"});
        $("#Gestion-Materiel").css({"display": "none"});
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Utilisateurs").css({"display": "none"});



    });


    $("li#GPU").click(function() {

        $("#Utilisateurs").show();
        $("#Mes-Consos").css({"display": "none"});
        $("#GestionConsommations").css({"display": "none"});
        $("#ConsultParc").css({"display": "none"});
        $("#Gestion-Materiel").css({"display": "none"});
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Utilisateurs").show();


    });

    $("li#GPI").click(function() {

        $("#Utilisateurs").css({"display": "none"});
        $("#Mes-Consos").css({"display": "none"});
        $("#GestionConsommations").css({"display": "none"});
        $("#ConsultParc").show();
        $("#Gestion-Materiel").css({"display": "none"});
        $("#Gestion-Parc").show();
        $("#Gestion-Utilisateurs").css({"display": "none"});

    });
    $("li#GM").click(function() {


        $("#Utilisateurs").css({"display": "none"});
        $("#Mes-Consos").css({"display": "none"});
        $("#GestionConsommations").css({"display": "none"});
        $("#ConsultParc").css({"display": "none"});
        $("#Gestion-Materiel").css({"display": "none"});
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Utilisateurs").css({"display": "none"});

    });



});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        trigger : 'hover',
        html: true,
        content: function(){
            return $('#profil').html();
        }
    });

    $("#btnAddLot").click(function() {

        $("#addFormLot").show();
        $("#btnAddLot").hide();

    });
    $("#SGPI").click(function() {


        $(location).attr('href', 'http://localhost:8000/syndic/');
        $("#Gestion-Utilisateurs").show();


    });
});

