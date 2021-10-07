// if ($("#Nom").val()) {
//     $(".buttonContact").prop("disabled", false);
// }

// $(document).ready(function () {
//     if ($("#Nom").val()) {
//         $(".buttonContact").prop("disabled", false);
//     }
// });


// ajout d'une fonction appelee des qu'une touche est enfoncee
function isCharSet() {
    // on verifie si le champ n'est pas vide alors on desactive le bouton sinon on l'active
    if ($("#Nom").val() && $("#email").val() && $("#Subject").val() && $("#message").val())  {
        $(".buttonContact").prop("disabled", false);
    } else {
        $(".buttonContact").prop("disabled", true);
    }  
  }