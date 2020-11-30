
// <p> Some awesome text inside here </p> 
// <button>Load</button>

var textToDisplay = "Even more awesome text inside here, but displayed one word at a time",
  $output = $("p");

$("button").click(function() {
  var displayInt;
  textToDisplay = textToDisplay.split(' ');
  $output.empty();
  displayInt = setInterval(function() {
    var word = textToDisplay.shift();
    if (word == null) { return clearInterval(displayInt); }
    $output.append(word + ' ');
  }, 300);
});

