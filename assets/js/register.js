$(document).ready(function(){

    $('input[type="checkbox"]').click(function(){
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

