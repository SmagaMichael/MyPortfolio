// boutons navbar
$("#home_button").click(function(){
    $("#div_home").prop("hidden",false);
    $("#div_about").prop("hidden",true);
    $("#div_project").prop("hidden",true);
    $("#div_contact").prop("hidden",true);
    $("#particles-js").prop("hidden",false);
    $("#navbarNav").removeClass("show");
});


$("#about_button").click(function(){
    $("#div_home").prop("hidden",true);
    $("#div_about").prop("hidden",false);
    $("#div_project").prop("hidden",true);
    $("#div_contact").prop("hidden",true);
    $("#navbarNav").removeClass("show");


});

$("#project_button").click(function(){
    $("#div_home").prop("hidden",true);
    $("#div_about").prop("hidden",true);
    $("#div_project").prop("hidden",false);
    $("#div_contact").prop("hidden",true);
    $("#navbarNav").removeClass("show");

});

$("#cv_button").click(function(){
    $("#navbarNav").removeClass("show");
});

$("#contact_button").click(function(){
    $("#div_home").prop("hidden",true);
    $("#div_about").prop("hidden",true);
    $("#div_project").prop("hidden",true);
    $("#div_contact").prop("hidden",false);
    $("#navbarNav").removeClass("show");

});

// boutons des différentes technos
$("#all_project_button").click(function(){
    $(".symfony").prop("hidden",false);
    $(".angular").prop("hidden",false);
    $(".php").prop("hidden",false);
    $(".javascript").prop("hidden",false);
    $(".laravel").prop("hidden",false);
    $(".template").prop("hidden",false);
});
$("#symfony_button").click(function(){
    $(".symfony").prop("hidden",false);
    $(".angular").prop("hidden",true);
    $(".php").prop("hidden",true);
    $(".javascript").prop("hidden",true);
    $(".laravel").prop("hidden",true);
    $(".template").prop("hidden",true);
});
$("#angular_button").click(function(){
    $(".symfony").prop("hidden",true);
    $(".angular").prop("hidden",false);
    $(".php").prop("hidden",true);
    $(".javascript").prop("hidden",true);
    $(".laravel").prop("hidden",true);
    $(".template").prop("hidden",true);
});
$("#php_button").click(function(){
    $(".symfony").prop("hidden",true);
    $(".angular").prop("hidden",true);
    $(".php").prop("hidden",false);
    $(".javascript").prop("hidden",true);
    $(".laravel").prop("hidden",true);
    $(".template").prop("hidden",true);
});
$("#javascript_button").click(function(){
    $(".symfony").prop("hidden",true);
    $(".angular").prop("hidden",true);
    $(".php").prop("hidden",true);
    $(".javascript").prop("hidden",false);
    $(".laravel").prop("hidden",true);
    $(".template").prop("hidden",true);
});
$("#template_button").click(function(){
    $(".symfony").prop("hidden",true);
    $(".angular").prop("hidden",true);
    $(".php").prop("hidden",true);
    $(".javascript").prop("hidden",true);
    $(".laravel").prop("hidden",true);
    $(".template").prop("hidden",false);
});
$("#laravel_button").click(function(){
    $(".symfony").prop("hidden",true);
    $(".angular").prop("hidden",true);
    $(".php").prop("hidden",true);
    $(".javascript").prop("hidden",true);
    $(".laravel").prop("hidden",false);
    $(".template").prop("hidden",true);
});