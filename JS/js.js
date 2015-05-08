$(document).ready(function()
{	

//Work Start
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

//Work End

//Hire Start
$("#cpl").hide();

$( "#pdsub" ).click(function() {
  $("#cpd").slideUp(500);
  $("#cpl").slideDown(500);
});

//Select IMG
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                $('#blah').css('width', "50%");
                $('#blah').css('height', "25%");                                                          
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });

});

