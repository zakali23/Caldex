<<<<<<< HEAD
console.log('Bienvenue sur WebPack!');
=======
>>>>>>> 92f5139ddf17bbf506d0e57cf166193b8ff3e91d
import $ from "jquery"

$(document).ready(function () {
    console.log("ok, JQuery fonctionne !");
});

<<<<<<< HEAD
console.log('Bienvenue sur WebPack!');

$(document).ready(function()
{
    $("#appbundle_contact_vousEtes").change(function() {
        if ($(this).val() === "Syndic") {
            // language=JQuery-CSS
            $(".contact").css({"display": "none"});
            $(".syndic").css({"display": "contents"});
            $(".residence").css({"display": "contents"});
        }
        else {
            if ($(this).val() === "null") {
                // language=JQuery-CSS
                $(".contact").css({"display": "none"});
                $(".syndic").css({"display": "none"});
                $(".residence").css({"display": "none"});
            }
            else {
                $(".contact").css({"display": "contents"});
                $(".syndic").css({"display": "contents"});
                $(".residence").css({"display": "contents"});
            }
        }
    });
});
$(document).ready(function () {

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 20) {
            $('#myBtn').fadeIn();
        } else {
            $('#myBtn').fadeOut();
        }
    });

    //Click event to scroll to top
    $('#myBtn').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

=======
console.log('Bienvenue sur WebPack!');
>>>>>>> 92f5139ddf17bbf506d0e57cf166193b8ff3e91d
