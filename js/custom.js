$( document ).ready(function() {
  console.log( "ready!" );
});


function checkFormasdfsadf() {
  console.log($('#locationcode').val().length);

  var locationcodelength = $('#locationcode').val().length;
  if(locationcodelength > 10) {
    alert("Your Location Code is over 10 characters!");
  }

  return false;
}