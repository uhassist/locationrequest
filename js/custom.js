$( document ).ready(function() {
  console.log( "ready!" );
});


function checkForm() {
  var msg = "";
  
  var whiteSpace = $('#locationcode').val().indexOf(' ')>=0;
  if(whiteSpace) {
    msg += "Your Location Code has 1 or more spaces\n";
  }

  if(msg!="") {
    alert(msg);
  }

  return false;
} 