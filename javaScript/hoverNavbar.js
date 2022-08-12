jQuery(document).ready(function ($) {

  var buttonToHover = $(".shouldShowNav");

  buttonToHover.hover(
    function() {
      $(".nav-dropdown").stop(true).fadeIn();
      $(".nav-dropdown").hover(
        function() {
          $(".nav-dropdown").css("display", "block");
        }, function() {
          $(".nav-dropdown").stop(true).fadeOut();
        }
      );
    }, function() {
      $(".nav-dropdown").css("display", "none");
    }

  );

});
