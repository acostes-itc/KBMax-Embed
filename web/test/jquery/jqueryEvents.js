function greet( event ) {
  alert( "Hello " + event.data.name );
}

function setTxt(value){
  $("#txt").html(value);
}

function test(){
  console.log("click button")
}

$(document).ready(function(){

    /*$('#input').on('input',function(){
        $("#text").html($(this).val());
    });*/

    $('#input').on('input',function(){
      setTxt($(this).val());
    });

//****************************************** on Click

    $("p").click(function(){
      $(this).hide();
    });

    
    $( '#buttonK' ).on( 'click', {
      name: "Karl"
    }, greet );
    $( '#buttonA' ).on( 'click', {
      name: "Addy"
    }, greet );

//******************************************

    $('#button').on('click', function(){
      test();
    });

});
