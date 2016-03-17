$( document ).ready(function() {
  console.log( "ready!" );
});


function checkForm() {
  var msg = "";

  console.log($('#locationcode').val().length);

  var locationcodelen = $('#locationcode').val().length;

  if(locationcodelen == 0) {
  	msg += "Location Code required\n";
  }
  
  var whiteSpace = $('#locationcode').val().indexOf(' ')>=0;
  if(whiteSpace) {
  	msg += "Your Location Code has 1 or more spaces\n";
  }

  var locationnamelen = $('#locationname').val().length;

  if(locationnamelen == 0) {
  	msg += "Location Name required\n";
  }
  
  var opacdisplaynamelen = $('#opacdisplayname').val().length;

  if(opacdisplaynamelen == 0) {
  	msg += "OPAC Display Name required\n";
  }

  if(msg!="") {
  	alert(msg);
  }

  return false;
} 