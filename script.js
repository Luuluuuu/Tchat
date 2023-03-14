const autoRefresh = setInterval(affichageChat, 1000);

function affichageChat () { 
    $("#chat").load("recuperer.php"); 
}

/* Envoie une requête par Ajax pour enregistrer la nouvelle phrase
    La demande de pseudo sera cachée après sa saisie
 */
function ajaxEnregistrer() {
    // Récupération des paramètres
    let pseudo = document.getElementById("pseudo").value;
    let phrase = document.getElementById("phrase").value;
    if (phrase !== "" && pseudo !== "") {
        $.ajax({
            url: "enregistrer.php",
            data: {"pseudo":pseudo, "phrase":phrase},
            type: "get",
            success: function(msg){
                // Si le 
                if (document.getElementById("pseudo").hidden === false){
                    document.getElementById("pseudo").hidden = true;

                }
                document.getElementById("phrase").value = null;
                document.getElementById("erreur").innerText = "";
            }
        })
    } else {
        document.getElementById("erreur").innerText = "Veuillez compléter tous les champs de saisie.";
    }
}

$("#envoyer").click(function(){
    ajaxEnregistrer();
});

$(document).keyup(function(event) {
    if (event.which === 13) {
        ajaxEnregistrer();
    }
});