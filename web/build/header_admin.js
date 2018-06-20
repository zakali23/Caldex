/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/web/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/header_admin.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/header_admin.js":
/*!***********************************!*\
  !*** ./assets/js/header_admin.js ***!
  \***********************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {


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

$(document).ready(function () {
    $("li#GU").click(function () {

        $("#Gestion-Utilisateurs").show();
        $("#Gestion-Parc").css({ "display": "none" });
        $("#Gestion-Materiel").css({ "display": "none" });
    });

    $("li#GP").click(function () {

        $("#Gestion-Utilisateurs").css({ "display": "none" });
        $("#Gestion-Parc").show();
        $("#Gestion-Materiel").css({ "display": "none" });
    });

    $("li#GM").click(function () {

        $("#Gestion-Utilisateurs").css({ "display": "none" });
        $("#Gestion-Parc").css({ "display": "none" });
        $("#Gestion-Materiel").show();
    });
});

$(document).ready(function () {
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        html: true,
        content: function content() {
            return $('.profil').html();
        }
    });

    $("li#SGPI").click(function () {

        $("#Parc").css({ "display": "contents" });
        $("#Consommations").css({ "display": "none" });
        $("#Collaborateur").css({ "display": "none" });
        $("#Résident").css({ "display": "none" });
    });

    $("li#SGConso").click(function () {

        $("#Parc").css({ "display": "none" });
        $("#Consommations").css({ "display": "contents" });
        $("#Collaborateur").css({ "display": "none" });
        $("#Résident").css({ "display": "none" });
    });

    $("li#SGCollab").click(function () {

        $("#Parc").css({ "display": "none" });
        $("#Consommations").css({ "display": "none" });
        $("#Collaborateur").css({ "display": "contents" });
        $("#Résident").css({ "display": "none" });
    });

    $("li#SGPL").click(function () {

        $("#Parc").css({ "display": "none" });
        $("#Consommations").css({ "display": "none" });
        $("#Collaborateur").css({ "display": "none" });
        $("#Résident").css({ "display": "contents" });
    });

    $("li#ACGPI").click(function () {

        $("#Parc").css({ "display": "contents" });
        $("#Consommations").css({ "display": "none" });
        $("#Collaborateur").css({ "display": "none" });
        $("#Résident").css({ "display": "none" });
    });

    $("li#ACGConso").click(function () {

        $("#Parc").css({ "display": "none" });
        $("#Consommations").css({ "display": "contents" });
        $("#Collaborateur").css({ "display": "none" });
        $("#Résident").css({ "display": "none" });
    });

    $("li#ACGCollab").click(function () {

        $("#Parc").css({ "display": "none" });
        $("#Consommations").css({ "display": "none" });
        $("#Collaborateur").css({ "display": "contents" });
        $("#Résident").css({ "display": "none" });
    });

    $("li#ACGPL").click(function () {

        $("#Parc").css({ "display": "none" });
        $("#Consommations").css({ "display": "none" });
        $("#Collaborateur").css({ "display": "none" });
        $("#Résident").css({ "display": "contents" });
    });
});

/***/ })

/******/ });