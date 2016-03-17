$( document ).ready(function() {
  console.log( "ready!" );
});


function checkForm() {
  var msg = "";

  console.log($('#locationcode').val().length);

  var locationcodelength = $('#locationcode').val().length;

  if(locationcodelength == 0) {
  	msg += "Location Code required\n"
  }
  
  var whiteSpace = $('#locationcode').val().indexOf(' ')>=0;
  if(whiteSpace) {
  	msg += "Your Location Code has 1 or more spaces\n"
  }
  
  if(msg!="") {
  	alert(msg);
  }

  return false;
} 