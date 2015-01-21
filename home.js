$(document).ready(function(){
  $(".hire").hover(function(){
    
	$('.hire').attr('value','I want to hire a photographer');
    },
    function(){
    $('.hire').attr('value','Hire');
  }); 
});

$(document).ready(function(){
  $(".work").hover(function(){
    
	$('.work').attr('value','I am a photographer');
    },
    function(){
    $('.work').attr('value','Work');
  }); 
});