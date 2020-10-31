// Js / app / form.js

// JQuery
var $ = require( "jquery" );

// Start Select
$("#start_select").change(function(){
  var selected = $(this).children("option:selected").val();

  // If Select a month
  if (selected === "") {
    $("#start_select").children().removeClass("d-none");
  }

  // If January
  if (selected === "2020-01-01") {
    $("#end_select").children().removeClass("d-none");
  }

  // If february
  if (selected === "2020-02-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+2)").addClass("d-none");
  }

  // If March
  if (selected === "2020-03-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+3)").addClass("d-none");
  }

  // If April
  if (selected === "2020-04-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+4)").addClass("d-none");
  }

  // If May
  if (selected === "2020-05-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+5)").addClass("d-none");
  }

  // If June
  if (selected === "2020-06-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+6)").addClass("d-none");
  }

  // If July
  if (selected === "2020-07-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+7)").addClass("d-none");
  }

  // If August
  if (selected === "2020-08-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+8)").addClass("d-none");
  }

  // If September
  if (selected === "2020-09-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+9)").addClass("d-none");
  }

  // If October
  if (selected === "2020-10-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+10)").addClass("d-none");
  }

  // If November
  if (selected === "2020-11-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+11)").addClass("d-none");
  }

  // If December
  if (selected === "2020-12-01") {
    $("#end_select").children().removeClass("d-none");
    $("#end_select").children("option:nth-child(-n+12)").addClass("d-none");
  }
});

// End Select
$("#end_select").change(function(){
  var selected = $(this).children("option:selected").val();

  // If Select a month
  if (selected === "") {
    $("#start_select").children().removeClass("d-none");
  }

  // If January
  if (selected === "2020-01-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-child(n+3)").addClass("d-none");
  }

  // If february
  if (selected === "2020-02-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+10)").addClass("d-none");
  }

  // If March
  if (selected === "2020-03-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+9)").addClass("d-none");
  }

  // If April
  if (selected === "2020-04-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+8)").addClass("d-none");
  }

  // If May
  if (selected === "2020-05-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+7)").addClass("d-none");
  }

  // If June
  if (selected === "2020-06-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+6)").addClass("d-none");
  }

  // If July
  if (selected === "2020-07-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+5)").addClass("d-none");
  }

  // If August
  if (selected === "2020-08-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+4)").addClass("d-none");
  }

  // If September
  if (selected === "2020-09-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+3)").addClass("d-none");
  }

  // If October
  if (selected === "2020-10-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+2)").addClass("d-none");
  }

  // If November
  if (selected === "2020-11-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-last-child(-n+1)").addClass("d-none");
  }

  // If December
  if (selected === "2020-12-01") {
    $("#start_select").children().removeClass("d-none");
    $("#start_select").children("option:nth-child(-n+12)").addClass("d-none");
  }
});
