
//-------------------------- list copro -----------------------
showImmeuble();
$('#listImmeuble').keyup(showImmeuble);

//appartementSelectCompteur

function showImmeuble() {
    var str = $('#listImmeuble').val();
    if (str.length === 0) {
        str = 'all';
    }
    console.log('ok');
    $.get( "http://localhost:8000/user/consultation/finding/"+str, function( data ) {
        $("#immeuble").html("");
        $.each(data, function(key, value){
            $("#immeuble").append(
                "<form action=\"lots\" method='post'>"+
                "<input type='hidden' name='idImmeuble' value='"+ value['id'] +"'>"+
                "<div class=\"panel panel-default\">" + "<div class=\"panel-body text-center\">"+
                "<button id='"+ value['id'] +"' type='submit' name='envoiImmeuble'>Immeuble N° :"+ value['reference'] +" </button>" + "</div>"+"<div class=\"list-group-horizontal\">"+
                "<p class=\"list-group-item\">" + value['adresse'] + " <i class=\"fas fa-map-marker-alt  fa-lg\">"+"</i>"+"</p>"+
                "<p class=\"list-group-item\">" + value['codePostal'] + " <i class=\"fas fa-map-signs fa-lg\">"+"</i>"+"</p>"+
                "<p class=\"list-group-item\">" + value['ville'] + " <i class=\"fas fa-map-pin fa-lg\">"+"</i>"+"</p>"+"</div>"+"</div>"+"<hr class=\"my-5\">");

        });

    });


}
