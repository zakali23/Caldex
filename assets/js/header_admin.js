
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

        $("#Gestion-Utilisateurs").show();
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Materiel").css({"display": "none"});
    });

    $("li#GP").click(function() {

        $("#Gestion-Utilisateurs").css({"display": "none"});
        $("#Gestion-Parc").show();
        $("#Gestion-Materiel").css({"display": "none"});
    });

    $("li#GM").click(function() {

        $("#Gestion-Utilisateurs").css({"display": "none"});
        $("#Gestion-Parc").css({"display": "none"});
        $("#Gestion-Materiel").show();
    });

    $("li#MBI").click(function() {

        $("#Mes-Biens").show();
    });

    $("li#MC").click(function() {

        $("#Mes-Consos").show();
    });

    $("li#SGPI").click(function() {

        $("#SParc").show();
        $("#SConsommations").css({"display": "none"});
        $("#SCollaborateur").css({"display": "none"});
        $("#SResident").css({"display": "none"});
    });

    $("li#SGConso").click(function() {

        $("#SParc").css({"display": "none"});
        $("#SConsommations").show();
        $("#SCollaborateur").css({"display": "none"});
        $("#SResident").css({"display": "none"});
    });

    $("li#SGCollab").click(function() {

        $("#SParc").css({"display": "none"});
        $("#SConsommations").css({"display": "none"});
        $("#SCollaborateur").show();
        $("#SResident").css({"display": "none"});
    });

    $("li#SGPL").click(function() {

        $("#SParc").css({"display": "none"});
        $("#SConsommations").css({"display": "none"});
        $("#SCollaborateur").css({"display": "none"});
        $("#SResident").show();
    });

    $("li#AC1").click(function() {

        $("#ACParc").show();
        $("#ACConsommations").css({"display": "none"});
        $("#ACCollaborateur").css({"display": "none"});
        $("#ACRésident").css({"display": "none"});
    });

    $("li#AC2").click(function() {

        $("#ACParc").css({"display": "none"});
        $("#ACConsommations").show();
        $("#ACCollaborateur").css({"display": "none"});
        $("#ACRésident").css({"display": "none"});
    });

    $("li#AC3").click(function() {

        $("#ACParc").css({"display": "none"});
        $("#ACConsommations").css({"display": "none"});
        $("#ACCollaborateur").show();
        $("#ACRésident").css({"display": "none"});
    });

    $("li#AC4").click(function() {

        $("#ACParc").css({"display": "none"});
        $("#ACConsommations").css({"display": "none"});
        $("#ACCollaborateur").css({"display": "none"});
        $("#ACRésident").show();
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
});

$(document).ready(function(){
    $('#appbundle_radiateur_type').change(function() {
        if ($(this).val() === 'Fonte') {
            $('#appbundle_radiateur_profondeur').val(15);
        }
        else if ($(this).val() === 'type10') {
            $('#appbundle_radiateur_profondeur').val("1 panneau");
        }
        else if ($(this).val() === 'type11') {
            $('#appbundle_radiateur_profondeur').val("1 panneau 1rang d'ailettes");
        }
        else if ($(this).val() === 'type20') {
            $('#appbundle_radiateur_profondeur').val("2 panneaux");
        }
        else if ($(this).val() === 'type21') {
            $('#appbundle_radiateur_profondeur').val("2 panneaux 1 rang d'ailettes");
        }
        else if ($(this).val() === 'type22') {
            $('#appbundle_radiateur_profondeur').val("2 panneaux 2 rangs d'ailettes");
        }
        else if ($(this).val() === 'type30') {
            $('#appbundle_radiateur_profondeur').val("3 panneaux");
        }
        else if ($(this).val() === 'type32') {
            $('#appbundle_radiateur_profondeur').val("3 panneaux 2 rangs d'ailettes");
        }
        else {
            $('#appbundle_radiateur_profondeur').val('choisir');
        }

    });
});

// Calcule la puissance nominale

$(document).ready(function(){
    function puissanceDelta() {
        var hauteur =  $('#appbundle_radiateur_hauteur').val();
        var longueur =  $('#appbundle_radiateur_longueur').val();
        if (hauteur !== false  && longueur !== false ){
            var res = hauteur * longueur;

            $('#appbundle_radiateur_puissanceDeltaT50').val(res);
        }
    }
    $('#appbundle_radiateur_hauteur' ).on('input', puissanceDelta);
    $('#appbundle_radiateur_longueur' ).on('input', puissanceDelta);

});