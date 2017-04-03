$(document).ready(function(){
  $(".icon-menu").click(function(e){
    e.preventDefault();
    $(".menu").show(100);
    $(".icon-cerrar").show(100);
    // $(".icon-menu").hide(100);
  });

  $(".icon-cerrar").click(function(e){
    e.preventDefault();
    $(".menu").hide(100);
    $(".icon-menu").show(100);
  });
});
