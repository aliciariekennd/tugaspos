$(document).ready(
    $("#button2").on("click", berekenBMR)
  );
  
  function berekenBMR(){
  var length = parseFloat($("#lengte2").val());
  var weight = parseFloat($("#gewicht2").val());
  var age = parseFloat($("#leeftijd").val());
  var gender = $("input[name='geslacht']:checked").val();
  var BMRCalculation = 0;
  if (gender == "man"){
    BMRCalculation = 10*weight + 6.25*length - 5*age + 5;
  }
  else{
    BMRCalculation = 10*weight + 6.25*length - 5*age -161;
  }
  var string = "BMR: " + BMRCalculation + " caloriën per dag";
  alert(string);
  }