jQuery(document).ready(function ($) {
  let parameters = new URLSearchParams(window.location.search);
  var action_buttons = document.querySelectorAll(".clientebtn");
  var company_button = document.querySelectorAll(".companybtn");
  var goTo = parameters.get("goto");

  if(goTo == '0') {
    var scroll_to_block = document.getElementById("customer_area");
    scroll_to_block.scrollIntoView({behavior: 'smooth'});
  }else if(goTo == '1') {
    var scroll_to_block = document.getElementById("company_area");
    scroll_to_block.scrollIntoView({behavior: 'smooth'});
  }

});


function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}
