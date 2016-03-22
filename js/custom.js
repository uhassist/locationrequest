$( document ).ready(function() {

  $( "#location-choice" ).change(function() {
    var loc = $("#location-choice").val();

    switch(loc) {
    case "HCW":
      updateLocationCode("HCW");
      updateLocationName("C KONA: ");
      updateLocationOPAC("UH Center, West Hawaii: ");
      break;

    case "HUH":
      updateLocationCode("HUH");
      updateLocationName("E HILO: ");
      updateLocationOPAC("UH Hilo: ");
      break;

    case "KCK":
      updateLocationCode("KCK");
      updateLocationName("X KAUAI: ");
      updateLocationOPAC("Kauai CC: ");
      break;

    case "MCM":
      updateLocationCode("MCM");
      updateLocationName("M MAUI: ");
      updateLocationOPAC("Maui College: ");
      break;

    case "OCH":
      updateLocationCode("OCH");
      updateLocationName("D HCC: ");
      updateLocationOPAC("Honolulu CC: ");
      break;

    case "OCK":
      updateLocationCode("OCK");
      updateLocationName("QK KAPCC: ");
      updateLocationOPAC("Kapiolani CC: ");
      break;

    case "OCL":
      updateLocationCode("OCL");
      updateLocationName("L LCC: ");
      updateLocationOPAC("Leeward CC: ");
      break;

    case "OCW":
      updateLocationCode("OCW");
      updateLocationName("W WCC: ");
      updateLocationOPAC("Windward CC: ");
      break;

    case "OUL":
      updateLocationCode("OUL");
      updateLocationName("OUL LAW: ");
      updateLocationOPAC("UH Law: ");
      break;

    case "OUM":
      updateLocationCode("Oum");
      updateLocationName("J MED: ");
      updateLocationOPAC("UHM: School of Medicine ");
      break;

    case "OUZT":
      updateLocationCode("Out");
      updateLocationName("T TIM: ");
      updateLocationOPAC("UHM: TIM ");
      break;

    case "OUW":
      updateLocationCode("OUW");
      updateLocationName("U UHWO: ");
      updateLocationOPAC("UH West Oahu: ");
      break;

    case "OUZH":
      updateLocationCode("Ouz");
      updateLocationName("Z UHM: ");
      updateLocationOPAC("UH Manoa: Hamilton ");
      break;

    case "OUZS":
      updateLocationCode("Ouz");
      updateLocationName("Z UHM: ");
      updateLocationOPAC("UH Manoa: Sinclair ");
      break;

    case "SIM":
      updateLocationCode("SIM");
      updateLocationName("HSIM: ");
      updateLocationOPAC("Hawaii Sheet Music Index: ");
      break;

    default:
      return;
    }

    $('#locationcode').focus();

  });

  $( "#show-jump-table" ).click(function() {
    $('#jump-codes').fadeIn("slow");
  });

  $( "#show-location-table" ).click(function() {
    $('#location-codes').fadeIn("slow");
  });



});

function updateLocationCode(loc) {
  $('#locationcode').val(loc);
  return;
}

function updateLocationName(loc) {
  $('#locationname').val(loc);
  return;
}

function updateLocationOPAC(loc) {
  $('#opacdisplayname').val(loc);
  return;
}
