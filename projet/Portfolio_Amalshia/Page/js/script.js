
// // <p> Some awesome text inside here </p> 
// // <button>Load</button>

// var textToDisplay = "Even more awesome text inside here, but displayed one word at a time",
//   $output = $("p");

// $("button").click(function() {
//   var displayInt;
//   textToDisplay = textToDisplay.split(' ');
//   $output.empty();
//   displayInt = setInterval(function() {
//     var word = textToDisplay.shift();
//     if (word == null) { return clearInterval(displayInt); }
//     $output.append(word + ' ');
//   }, 300);
// });


//on récupère le contenu du texte dans la ballise P ID="MyTextDescription"
var TexteEntier = document.getElementById('MyTextDescription').innerText;
//On récupére le nombre de caractère du contenu
var nombre_de_lettre = TexteEntier.length; 

//On ajoute chaque lettre dans un tableau 
var tableau = TexteEntier.split("");

texte = new Array;
var txt = '';
var nb_msg = nombre_de_lettre - 1;
console.log(txt);


//pour i = 0 on incrémente jusqu'à ce qu'on ai atteint le nombre de lettre du contenu
for (i=0;  i < nombre_de_lettre;  i++) {
texte[i] = txt+tableau[i];
var txt = texte[i];



console.log(txt);

}

actual_texte = 0;

function changeMessage(){
document.getElementById("MyTextDescription").innerHTML = texte[actual_texte];
actual_texte++;
if(actual_texte >= texte.length)
actual_texte = nb_msg;
}


setInterval(changeMessage,40) /* la vitesse de defilement (plus on a une valeur faible plus 
texte s'affiche rapidement) */