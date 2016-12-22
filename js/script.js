$(document).ready(function () {

    var eventInfo = [
        {
            horaire: "9h30- 18h30",
            tarif: "Tarif famille par enfant (à partir de 4 pers): 9.65 €/ Tarif réduit PMR :10.50 €/ Tarif enfant: 12.50 €/ Tarif réduit étudiant et demandeur d'emploi: 13.80 €/ Tarif famille par adulte (à partir de 4 pers): 16.55 €/ Tarif réduit Sénior (+ de 60 ans): 17.50 €/ Tarif adulte: 19 €",
            infosup: "www.nausicaa.fr"
    },
        {
            horaire: "10h-12h & 14h-17h Fermée le dimanche après-midi et le lundi toute la journée  hors vacances scolaires",
            tarif: "???",
            infosup: ""
    },
        {
            horaire: "10h00-12h30 & 14h30-17h30",
            tarif: "Exposition temporaire tarif réduit: 2 € / Exposition temporaire plein tarif: 3 € / Collections permanentes tarif réduit: 3 € /Billet couplé tarif réduit (collections permanentes + exposition temporaire): 4 € / Collections permanentes plein tarif: 5 €",
            infosup: ""
    }]
    var mouseX;
    var mouseY;
    $("#infoWindow").hide();
    $(document).mousemove(function (e) {
        mouseX = e.pageX;
        mouseY = e.pageY;
    });

    $("#tabs").tabs();
    $("#tabs2").tabs();
    $(".dragEvent").draggable({
        containment: $('#drag-drop'),
        helper: 'clone'
    });

    $(".dragEvent i").click(function () {
        var index = $(".dragEvent i").index(this);
        $("#horaire").text(eventInfo[index]["horaire"]);
        $("#tarifs").text(eventInfo[index]["tarif"]);
        $("#infoSup").html("<a href='" + eventInfo[index]["infosup"] + "'>" + eventInfo[index]["infosup"] + "</a>");
        $('#infoWindow').css({
            'top': mouseY,
            'left': mouseX
        }).show();
        $(document).click(function () {
            $(this).hide();
        });

    });


});
