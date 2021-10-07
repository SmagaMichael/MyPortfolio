
// ajout d'une fonction appelee des qu'une touche est enfoncee
function isCharSet() {
    // on verifie si le champ n'est pas vide alors on desactive le bouton sinon on l'active
    if ($("#Nom").val() && $("#email").val() && $("#Subject").val() && $("#message").val())  {
        $(".buttonContact").prop("disabled", false);
    } else {
        $(".buttonContact").prop("disabled", true);
    }  

    if (!$("#Nom").val()){
        $("#Nom").css('border', '2px solid red'); 
    }else{
        $("#Nom").css('border', '1px solid black'); 
    }

    if (!$("#email").val()){
        $("#email").css('border', '2px solid red'); 
    }else{
        $("#email").css('border', '1px solid black'); 

    }

    if (!$("#Subject").val()){
        $("#Subject").css('border', '2px solid red'); 
    }else{
        $("#Subject").css('border', '1px solid black'); 

    }

    if (!$("#message").val()){
        $("#message").css('border', '2px solid red'); 
    }else{
        $("#message").css('border', '1px solid black'); 

    }
  }