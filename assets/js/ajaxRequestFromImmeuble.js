
$('#onkeyup').keyup(showHint);

//appartementSelectCompteur

function showHint() {
    var str = $('#onkeyup').val();
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
            $.get( "http://localhost:8000/compteur/search/"+str, function( data ) {
                $("#immeubleSelectCompteur").html("");
            $.each(data, function(key, value){
                $("#immeubleSelectCompteur").append(
                    "<option value='"+ value['id'] +"'>"+ value["adresse"] +" "+ value["codePostal"]+ " " + value["ville"] +"</option>");
            });
                $('#immeubleSelectCompteur option').click(showLot);
            });
    }
}

function showLot(){
    var idImmeuble = $('#immeubleSelectCompteur option:selected').val();

    if (idImmeuble == '') {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        $.get( "http://localhost:8000/compteur/find/"+idImmeuble, function( data ) {
            $("#appartementSelectCompteur").html("");
            $.each(data, function(key, value){
                $("#appartementSelectCompteur").append(
                    "<option value='"+ value['id'] +"'>"+ value["etage"] +" "+ value["numero"]+ " " + value["reference"] +"</option>");
            });
            $('#appartementSelectCompteur option').click(showPiece);
        });
    }
}

function showPiece(){
    console.log("test");
    var idLot = $('#appartementSelectCompteur option:selected').val();

    if (idLot == '') {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        $.get( "http://localhost:8000/compteur/findPiece/"+idLot, function( data ) {
            $("#pieceSelectCompteur").html("");
            $.each(data, function(key, value){
                console.log(value);
                $("#pieceSelectCompteur").append(
                    "<option value='"+ value['id'] +"'>"+ value["nom"] +" "+ value["surface"] +"</option>");
            });$('#pieceSelectCompteur option').click(showCrout);
        });
    }
}




function showCrout(){
    var idPiece = $('#appartementSelectCompteur option:selected').val();

    $("#envoiIdPiece").val(idPiece);

    console.log(idPiece);

}

