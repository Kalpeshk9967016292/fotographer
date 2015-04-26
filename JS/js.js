$(document).ready(function()
{	

//$("#pd").slideUp(500);
$("#pl").hide();
$("#top").hide();

$( "#pdsub" ).click(function() {
  $("#pd").slideUp(500);
  $("#pl").slideDown(500);
});

$( "#plrev" ).click(function() {
  $("#pd").slideDown(500);
  $("#pl").slideUp(500);
});

$( "#plnex" ).click(function() {
  $("#pl").slideUp(500);
  $("#top").slideDown(500);
});

$( "#toprev" ).click(function() {
  $("#pl").slideDown(500);
  $("#top").slideUp(500);
});



});

