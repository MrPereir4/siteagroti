// catch the div-button on which we need the scroll action
jQuery(document).ready(function ($) {
var action_buttons = document.querySelectorAll(".clientebtn");
var company_button = document.querySelectorAll(".companybtn");

action_buttons.forEach(action_button => {
  action_button.addEventListener("click", () => {
    // the block with the id we want to scroll in
    var scroll_to_block = document.getElementById("customer_area");
    scroll_to_block.scrollIntoView({behavior: 'smooth'});
  });
});

company_button.forEach(action_button => {
  action_button.addEventListener("click", () => {
    // the block with the id we want to scroll in
    var scroll_to_block = document.getElementById("company_area");
    scroll_to_block.scrollIntoView({behavior: 'smooth'});
  });
});


});
