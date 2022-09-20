$(document).ready(function(){
  $( function() {
  $(".hidden").hide();
  $(".fgpswd").click(function(){
    $(".hidden").toggle(10);
  }
    );
  $( "#accordion" ).accordion({
    collapsible:true,
    active:false,
    heightStyle:"content"
  });
} );
});