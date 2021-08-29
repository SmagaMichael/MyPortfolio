$("#home_button").click(function(){
    $("#div_home").prop("hidden",false);
    $("#div_about").prop("hidden",true);
    $("#div_project").prop("hidden",true);
    $("#div_contact").prop("hidden",true);
});


$("#about_button").click(function(){
    $("#div_home").prop("hidden",true);
    $("#div_about").prop("hidden",false);
    $("#div_project").prop("hidden",true);
    $("#div_contact").prop("hidden",true);
});

$("#project_button").click(function(){
    $("#div_home").prop("hidden",true);
    $("#div_about").prop("hidden",true);
    $("#div_project").prop("hidden",false);
    $("#div_contact").prop("hidden",true);
});

$("#contact_button").click(function(){
    $("#div_home").prop("hidden",true);
    $("#div_about").prop("hidden",true);
    $("#div_project").prop("hidden",true);
    $("#div_contact").prop("hidden",false);
});