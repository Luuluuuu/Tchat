function getXHR(){
    let xhr = null;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    } else {
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest");
        xhr = false
    }
    return xhr;
}

function ajaxEnregistrer(){
    // Création du XHR
    let xhr = getXHR();

    // Récupération des paramètres
    let pseudo = document.getElementById("pseudo").value;
    let phrase = document.getElementById("phrase").value;

    xhr.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            // TODO: Coder la mise à jour de la page avec le nouveau message
            alert("Ca marche ?")}
    }

    xhr.open("get","enregistrer.php?pseudo=" + pseudo
            + "&phrase=" + phrase, true);
    xhr.send();
}