$(document).ready(function()
{	

//$("#pd").slideUp(500);
$("#pl").hide();

$( "#pdsub" ).click(function() {
  $("#pd").slideUp(500);
  $("#pl").slideDown(500);
});

$( "#plrev" ).click(function() {
  $("#pd").slideDown(500);
  $("#pl").slideUp(500);
});

});