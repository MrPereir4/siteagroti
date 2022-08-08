jQuery(document).ready(function ($) {

  var buttonToHover = $(".shouldShowNav");

  buttonToHover.hover(
    function() {
      $(".nav-dropdown").css("display", "block");
      $(".nav-dropdown").hover(
        function() {
          $(".nav-dropdown").css("display", "block");
        }, function() {
          $(".nav-dropdown").css("display", "none");
        }
      );
    }, function() {
      $(".nav-dropdown").css("display", "none");
    }

  );

});
