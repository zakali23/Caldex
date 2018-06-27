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
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/register.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/register.js":
/*!*******************************!*\
  !*** ./assets/js/register.js ***!
  \*******************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

$(document).ready(function () {

    $('input[type="checkbox"]').click(function () {
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });

    /* Quand je selectionne utilisateur les autres checkbox disparaissent*/
    $(function () {
        $("#fos_user_registration_form_roles_0").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").show();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_1").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").show();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_2").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").show();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_3").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").show();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_6").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").show();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_7").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").show();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_4").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").show();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_5").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").show();
                $(".proprio").hide();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_8").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").show();
                $(".locataire").hide();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });

        $("#fos_user_registration_form_roles_9").click(function () {
            if ($(this).is(":checked")) {
                $(".admin").hide();
                $(".syndicat").hide();
                $(".copro").hide();
                $(".assocopro").hide();
                $(".president").hide();
                $(".secretaire").hide();
                $(".salarie").hide();
                $(".user").hide();
                $(".proprio").hide();
                $(".locataire").show();
            } else {
                $(".admin").show();
                $(".syndicat").show();
                $(".copro").show();
                $(".assocopro").show();
                $(".president").show();
                $(".secretaire").show();
                $(".salarie").show();
                $(".user").show();
                $(".proprio").show();
                $(".locataire").show();
            }
        });
    });
});

/***/ })

/******/ });