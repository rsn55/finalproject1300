$(document).ready(function () {






     $("#impact-border").hover( function() {
       $("#impact-h1").toggle();
       $("#impact-paragraph").toggle();



    });
    $("#calv-border").hover( function() {
      $("#calvert-h1").toggle();
      $("#calvert-paragraph").toggle();
  });

  // When the user clicks on the button, open the modal
  $("#first").click( function() {

      $("#modalBack").show();
  });



  $("#second").click( function() {

      $("#modalBack2").show();

  });
  $("#third").click( function() {

      $("#modalBack3").show();

  });
  $("#fourth").click( function() {

      $("#modalBack4").show();

  });
  $("#fifth").click( function() {

      $("#modalBack5").show();

  });

  $("#modalBack").click( function() {

      $("#modalBack").hide();

  });
  $("#modalBack2").click( function() {

      $("#modalBack2").hide();

  });

  $("#modalBack3").click( function() {

      $("#modalBack3").hide();

  });
  $("#modalBack4").click( function() {

      $("#modalBack4").hide();

  });
  $("#modalBack5").click( function() {

      $("#modalBack5").hide();

  });

  $(".first").hover( function() {

    $("#first").toggle();
  });
$(".second").hover( function() {

  $("#second").toggle();
});

$(".third").hover( function() {

  $("#third").toggle();
});

$(".fourth").hover( function() {

  $("#fourth").toggle();
});

$(".fifth").hover( function() {

  $("#fifth").toggle();
});






});
