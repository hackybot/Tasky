$(document).ready(function(){

  //on click handler for clear button
  var clearFields = $("#clearFields");

  clearFields.on("click",function(){
    $("form input").val("");


  });


});
