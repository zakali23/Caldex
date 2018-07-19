
//-------------------------- list pieces -----------------------
showRooms();
$('#listPieces').keyup(showRooms);

//appartementSelectCompteur

function showRooms() {
    var str = $('#listPieces').val();
    if (str.length === 0) {
        str = 'all';
    }
    console.log('ok');
    $.get( "http://localhost:8000/user/consultation/findrooms/"+str, function( data ) {
        $("#rooms").html("");
        $.each(data, function(key, value){
            $("#rooms").append(
                "<form action=\"pieces\" method='post'>"+
                "<input type='hidden' name='idLot' value='"+ value['id'] +"'>"+
                "<div class=\"panel panel-default\">" + "<div class=\"panel-body text-center\">"+
                "<button id='"+ value['id'] +"' type='submit' name='envoiImmeuble'>Piece :"+ value['nom'] +" </button>" + "</div>"+"<div class=\"list-group-horizontal\">"+
                "<p class=\"list-group-item\"> Consommation  <i class=\"fas fa-map-marker-alt  fa-lg\">"+"</i>"+"</p>"+
                "<p class=\"list-group-item\">" + value['surface'] + " <i class=\"fas fa-map-signs fa-lg\">"+"</i>"+"</p>"+
                "<p class=\"list-group-item\">" + value['photo'] + " <i class=\"fas fa-map-pin fa-lg\">"+"</i>"+"</p>"+"</div>"+"</div>"+"<hr class=\"my-5\">");

        });

    });


}
