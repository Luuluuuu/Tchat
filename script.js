const autoRefresh = setInterval(affichageChat, 1000);

function affichageChat () { 
    $("#chat").load("recuperer.php"); 
}

function ajaxEnregistrer() {
    // Récupération des paramètres
    let pseudo = document.getElementById("pseudo").value;
    let phrase = document.getElementById("phrase").value;
    if (phrase !== "") {
        $.ajax({
            url: "enregistrer.php",
            data: {"pseudo":pseudo, "phrase":phrase},
            type: "get",
            success: function(msg){
                document.getElementById("phrase").value = null;
            }
        })
    }
}

$("#envoyer").click(function() {ajaxEnregistrer();});

$(document).keyup(function(event) {
    if (event.which === 13) {
        ajaxEnregistrer();
    }
});