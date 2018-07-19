
//-------------------------- list copro -----------------------
showLots();
$('#listLots').keyup(showLots);

//appartementSelectCompteur

function showLots() {
    var str = $('#listLots').val();
    if (str.length === 0) {
        str = 'all';
    }
    console.log('ok');
    $.get( "http://localhost:8000/user/consultation/findlot/"+str, function( data ) {
        $("#Lots").html("");
        $.each(data, function(key, value){
            $("#Lots").append(
                "<form action=\"pieces\" method='post'>"+
                "<input type='hidden' name='idLot' value='"+ value['id'] +"'>"+
                "<div class=\"panel panel-default\">" + "<div class=\"panel-body text-center\">"+
                "<button id='"+ value['id'] +"' type='submit' name='envoiImmeuble'>Lots N° :"+ value['numero'] +" </button>" + "</div>"+"<div class=\"list-group-horizontal\">"+
                "<p class=\"list-group-item\">" + value['etage'] + " <i class=\"fas fa-map-marker-alt  fa-lg\">"+"</i>"+"</p>"+
                "<p class=\"list-group-item\">" + value['surface'] + " <i class=\"fas fa-map-signs fa-lg\">"+"</i>"+"</p>"+
                "<p class=\"list-group-item\">" + value['photo'] + " <i class=\"fas fa-map-pin fa-lg\">"+"</i>"+"</p>"+"</div>"+"</div>"+"<hr class=\"my-5\">");

        });

    });


}
